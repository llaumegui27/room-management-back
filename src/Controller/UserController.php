<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\ReservationRepository;
use App\Entity\Room;
use App\Repository\RoomRepository;
use App\Entity\Reservation;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserController extends AbstractController
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/users', name: 'users', methods: ['GET'])]
    public function users(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
        $responseData = [];

        foreach ($users as $user) {
            $responseData[] = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'mail' => $user->getMail(),
                'password' => $user->getPassword(),
                'teacher' => $user->isTeacher(),
                'admin' => $user->isAdmin(),
                'super_admin' => $user->isSuperAdmin()
            ];
        }
        return $this->json($responseData);
    }

    #[Route('/user/{id}', name: 'user', methods: ['GET'])]
    public function userById(UserRepository $userRepository, $id): Response
    {
        if (!$userRepository->find($id)) {
            throw $this->createNotFoundException(
                'No user found with id : '.$id
            );
        }

        $user = $userRepository->find($id);
        $responseData[] = [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'mail' => $user->getMail(),
            'password' => $user->getPassword(),
            'teacher' => $user->isTeacher(),
            'admin' => $user->isAdmin(),
            'super_admin' => $user->isSuperAdmin()
        ];

        return $this->json($responseData);
    }

    #[Route('/add-user', name: 'add_user', methods: ['POST'])]
    public function addUser(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $data = json_decode($request->getContent(), true);
        $user = new User();

        $user->setName($data['name']);
        $user->setMail($data['mail']);
        $hashedPassword = $this->passwordHasher->hashPassword($user, $data['password']);
        $user->setPassword($hashedPassword);
        $user->setTeacher($data['teacher']);
        $user->setAdmin($data['admin']);
        $user->setSuperAdmin($data['super_admin']);

        $entityManager->persist($user);
        $entityManager->flush();
        
        // return $this->json($user, Response::HTTP_OK);
        if ($user->getId()) {
            return $this->json(['etat' => true, 'message' => 'Inscription réussie'], Response::HTTP_OK);
        } else {
            return $this->json(['etat' => false, 'message' => 'Inscription échouée'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    #[Route('/delete-user/{id}', name: 'delete_user', methods: ['DELETE'])]
    public function deleteUser(int $id, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $userRepository = $entityManager->getRepository(User::class);

        $user = $userRepository->find($id);

        if (!$user) {
            return $this->json(['etat' => false, 'message' => 'Utilisateur introuvable'], Response::HTTP_BAD_REQUEST);
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->json(['etat' => true, 'message' => "Utilisateur : $id supprimé."], Response::HTTP_OK);
    }

    #[Route('/update-user/{id}', name: 'update_user', methods: ['PUT'])]
    public function updateUser(int $id, Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $userRepository = $entityManager->getRepository(User::class);

        $user = $userRepository->find($id);

        if (!$user) {
            return $this->json(['etat' => false, 'message' => 'Utilisateur introuvable'], Response::HTTP_BAD_REQUEST);
        }

        $data = json_decode($request->getContent(), true);

        $user->setName($data['name']);
        $user->setMail($data['mail']);
        $user->setPassword($data['password']);        
        $user->setTeacher($data['teacher']);
        $user->setAdmin($data['admin']);
        $user->setSuperAdmin($data['super_admin']);

        $entityManager->flush();

        return $this->json(['etat' => true, 'message' => "Utilisateur : $id modifiée."], Response::HTTP_OK);
    }

    #[Route('/user/{id}/reservations', name: 'user_reservations', methods: ['GET'])]
    public function userReservations(
            UserRepository $userRepository,
            ReservationRepository $reservationRepository,
            RoomRepository $roomRepository,
            $id
        ): Response {
            $user = $userRepository->find($id);

            if (!$user) {
                throw $this->createNotFoundException(
                    'No user found with id: '.$id
                );
            }

        $reservations = $reservationRepository->findBy(['idUser' => $user]);

        $responseData = [];

        foreach ($reservations as $reservation) {
            $room = $roomRepository->find($reservation->getIdRoom());
            $responseData[] = [
                'id' => $reservation->getId(),
                'date_heure_debut' => $reservation->getDateHeureDebut(),
                'date_heure_fin' => $reservation->getDateHeureFin(),
                'room_name' => $room->getName(),
                'etat' => $reservation->isEtat(),
                'commentaire' => $reservation->getCommentaire()
            ];
        }

        return $this->json($responseData);
    }


}
