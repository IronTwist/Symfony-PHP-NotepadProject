<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Services\FileUploaderService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @Route("/post", name="post.")
 */

class PostController extends AbstractController
{
    #[Route('/', name: 'index')]
    /**
     * Undocumented function
     * 
     * @param PostRepository $postRepository
     * @return Response
     */
    public function index(PostRepository $postRepository): Response
    {

        $posts = $postRepository->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }
    
    /**
     * @Route("/create", name="create")
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request, FileUploaderService $fileUploaderService){
        //create a new post
        // dump($fileUploaderService);
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
    
        
        if ($form->isSubmitted() && $form->isValid()) { 
            
            $em = $this->getDoctrine()->getManager();

            /**
             * @var UploadedFile $file
             */
            $file = $request->files->get('post')['attachment'];
            dump($file);

            if(is_null($file)){
                $post->setImage("");

                $em->persist($post);
                $em->flush();
            }

            if(!is_null($file)){

                $filename = $fileUploaderService->uploadFile($file);
               
                $post->setImage($filename);
                // dump($$filename);

                $em->persist($post);
                $em->flush();

            }

            return $this->redirectToRoute('post.index');
        }

        return $this->render('post/create.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/show/{id}", name="show")
     *
     * @return Response
     */
    public function show($id, PostRepository $postRepository){

        $post = $postRepository->find($id);
        dump($post);
        //create the show view

        if(isset($id)){ 
            $_SESSION['logat'] = true;
        }else{
            $_SESSION['logat'] = false;
        }
        
        return $this->render('post/show.html.twig', [
            'post' => $post
        ]);
    }

    /**
     * @Route("/delete/{id}",name="delete")
     *
     * 
     */
    public function remove($id, PostRepository $postRepository){
        $post= $postRepository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        
        $this->addFlash('postNotice', 'Post was removed!');

        

        return $this->redirect($this->generateUrl('post.index'));

    }
}
