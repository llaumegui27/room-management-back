<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Room;
use App\Repository\RoomRepository;
use Doctrine\Persistence\ManagerRegistry;

class RoomController extends AbstractController
{
    #[Route('/rooms', name: 'rooms', methods: ['GET'])]
    public function rooms(RoomRepository $roomRepository): Response
    {
        $rooms = $roomRepository->findAll();
        $responseData = [];

        foreach ($rooms as $room) {
            $responseData[] = [
                'id' => $room->getId(),
                'name' => $room->getName(),
                'subject' => $room->getSubject(),
                'places' => $room->getPlaces(),
                'participants' => $room->getParticipants()
            ];
        }
        return $this->json($responseData);
    }

    #[Route('/room/{id}', name: 'room', methods: ['GET'])]
    public function roomById(RoomRepository $roomRepository, $id): Response
    {
        if (!$roomRepository->find($id)) {
            throw $this->createNotFoundException(
                'No room found with id : '.$id
            );
        }

        $room = $roomRepository->find($id);
        $responseData[] = [
            'id' => $room->getId(),
            'name' => $room->getName(),
            'subject' => $room->getSubject(),
            'places' => $room->getPlaces(),
            'participants' => $room->getParticipants()
        ];

        return $this->json($responseData);
    }

    #[Route('/add-room', name: 'add-room', methods: ['POST'])]
    public function addRoom(Request $request, ManagerRegistry $doctrine) : Response 
    {
        $entityManager = $doctrine->getManager();
        $data = json_decode($request->getContent(), true);
        $room = new Room();

        $room->setName($data['name']);
        $room->setSubject($data['subject']);
        $room->setPlaces($data['places']);
        $room->setParticipants($data['participants']);

        $entityManager->persist($room);
        $entityManager->flush();
        // return $this->json($room, Response::HTTP_OK);
        if ($room->getId()) {
            return $this->json(['etat' => true, 'message' => 'Salle enregistré'], Response::HTTP_OK);
        } else {
            return $this->json(['etat' => false, 'message' => 'Échec de l\'ajout de la salle'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    #[Route('/delete-room/{id}', name: 'delete_room', methods: ['DELETE'])]
    public function deleteRoom(int $id, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $roomRepository = $entityManager->getRepository(Room::class);

        $room = $roomRepository->find($id);

        if (!$room) {
            return $this->json(['etat' => false, 'message' => 'Salle introuvable'], Response::HTTP_BAD_REQUEST);
        }

        $entityManager->remove($room);
        $entityManager->flush();

        return $this->json(['etat' => true, 'message' => "Salle supprimé avec l'id : $id"], Response::HTTP_OK);
        
    }

    #[Route('/update-room/{id}', name: 'update_room', methods: ['PUT'])]
    public function updateRoom(int $id, Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $roomRepository = $entityManager->getRepository(Room::class);

        $room = $roomRepository->find($id);

        if (!$room) {
            return $this->json(['etat' => false, 'message' => 'Salle introuvable'], Response::HTTP_BAD_REQUEST);
        }

        $data = json_decode($request->getContent(), true);

        $room->setName($data['name']);
        $room->setSubject($data['subject']);
        $room->setPlaces($data['places']);
        $room->setParticipants($data['participants']);

        $entityManager->flush();

        return $this->json(['etat' => true, 'message' => "Salle modifié avec l'id : $id"], Response::HTTP_OK);
    }
}
