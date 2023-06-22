<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Entity\Room;
use App\Repository\RoomRepository;
use Doctrine\Persistence\ManagerRegistry;
use DateTimeImmutable;


class ReservationController extends AbstractController
{
    #[Route('/reservations', name: 'reservations')]
    public function reservations(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();
        $responseData = [];

        foreach ($reservations as $reservation) {
            $responseData[] = [
                'id' => $reservation->getId(),
                'date_heure_debut' => $reservation->getDateHeureDebut(),
                'date_heure_fin' => $reservation->getDateHeureFin(),
                'id_user_id' => $reservation->getIdUser()->getId(),
                'id_room_id' => $reservation->getIdRoom()->getId()
            ];
        }
        return $this->json($responseData);
    }

    #[Route('/add-reservation', name: 'add-reservation', methods: ['POST'])]
    public function addReservation(Request $request, ManagerRegistry $doctrine): Response
    {

        $entityManager = $doctrine->getManager();
        $data = json_decode($request->getContent(), true);
        $reservation = new Reservation();

        $idUser = $entityManager->getRepository(User::class)->find($data['id_user_id']);
        $idRoom = $entityManager->getRepository(Room::class)->find($data['id_room_id']);

        $dateHeureDebut = new DateTimeImmutable($data['date_heure_debut']);
        $dateHeureFin = new DateTimeImmutable($data['date_heure_fin']);

        $reservation->setIdUser($idUser);
        $reservation->setIdRoom($idRoom);
        $reservation->setDateHeureDebut($dateHeureDebut);
        $reservation->setDateHeureFin($dateHeureFin);
        $reservation->setEtat($data['etat']);

        $entityManager->persist($reservation);
        $entityManager->flush();
        //return new JsonResponse('success');
        return $this->json($reservation, Response::HTTP_OK);
    }
}
