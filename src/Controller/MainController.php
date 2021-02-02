<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // return $this->json([
        //     'message' => 'Welcome to Freecodecamp!'
            
        // ]);

        // return new Response("<h2>Welcome to Symphony</h2>", 200);

        return $this->render("home/index.html.twig");
    }

    
    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */ 
    
    public function custom(Request $request){

        // dump($request->get("name"));

        $nume = $request->get("name");

        // return new Response("Welecome $nume");
        return $this->render("home/custom.html.twig", [
            'name' => $nume
        ]);
    }

    
}
