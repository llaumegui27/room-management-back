<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;


class UserController extends AbstractController
{
    #[Route('/users', name: 'users', methods: ['GET'])]
    public function users(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
        $responseData = [];

        foreach ($users as $user) {
            $responseData[] = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getMail(),
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
            'email' => $user->getMail(),
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
        $user->setPassword($data['password']);
        $user->setTeacher($data['teacher']);
        $user->setAdmin($data['admin']);
        $user->setSuperAdmin($data['super_admin']);

        $entityManager->persist($user);
        $entityManager->flush();
        return $this->json($user, Response::HTTP_OK);

    }
}
