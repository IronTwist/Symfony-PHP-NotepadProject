<?php

namespace App\Controller;

use Attribute;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

#[Route('/user', name: 'user.')]
class UserController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request): Response
    {
        $id = $this->getUser()->getId();
        //-------------------------------------------FORM
        $formChangeName = $this->createFormBuilder()
                ->add('id', HiddenType::class, [
                    'label' => false,
                    'attr' => [
                        'value'=> $id,
                    ]
                ])
                ->add('name', TextType::class,[
                    'attr' => [
                        'placeholder' => 'Type to change name'
                    ]
                ])
                ->add('ChangeName', SubmitType::class,[
                    'attr' => [
                        'class' => 'btn btn-success'
                    ]
                ])
                ->getForm();    //generez forma
        //-------------------------------------------END FORM  

        $formChangeName->handleRequest($request); 

        if($formChangeName->isSubmitted()){
            $data = $formChangeName->getData();
            
            echo $data['name'];

            $user = $this->getUser();
            $user->setName($data['name']);

            // dump($user);

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('user.index'));
        }

        
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'form' => $formChangeName->createView()
        ]);
    }

    
}
