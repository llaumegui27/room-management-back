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
                'participants' => $room->getParticipants(),

            ];
        }
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
        return $this->json($room, Response::HTTP_OK);

    }
}
