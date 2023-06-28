<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login', methods: ['POST'])]
    public function login(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher): Response
    {
        $data = json_decode($request->getContent(), true);
        $mail = $data['mail'];
        $password = $data['password'];

        $user = $userRepository->findOneBy(['mail' => $mail]);

        if (!$user) {
            return $this->json(['etat' => false, 'message' => 'Email invalide'], Response::HTTP_BAD_REQUEST);
        }

        if (!$passwordHasher->isPasswordValid($user, $password)) {
            return $this->json(['etat' => false, 'message' => 'Mot de passe invalide'], Response::HTTP_UNAUTHORIZED);
        }

        return $this->json(['etat' => true, 'message' => 'Connexion reussie', "id" => $user->getId()], Response::HTTP_OK);
    }

}
