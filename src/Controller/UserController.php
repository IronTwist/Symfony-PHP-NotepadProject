<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user', name: 'user.')]
class UserController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/changeName/{name}", name="changeName")
     * @param String $name
     * @return Response
     */
    public function changeName($name, UserRepository $userRepository){
        $user = $userRepository->find(1);
        $name = $name;

        $user->setName($name);

        // dump($name);
        dump($user);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        dump($em);

        
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
    

        return $this->render('user/index.html.twig', [
            'schimbaNume' => $name
        ]);
    }
}
