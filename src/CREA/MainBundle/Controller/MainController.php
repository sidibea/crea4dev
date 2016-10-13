<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/10/16
 * Time: 0:07
 */

namespace CREA\MainBundle\Controller;


use CREA\MainBundle\Entity\Post;
use CREA\MainBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller {

    public function indexAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $post = new Post();
        $form = $this->get('form.factory')->create(new PostType(), $post);

        if ($form->handleRequest($request)->isValid()){

            $post->setDateAdd(new \Datetime());
            $post->setDateUpd(new \Datetime());

            $em->persist($post);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Votre inscription a bien été prise en compte.');
            return $this->redirect($this->generateUrl('crea_main_homepage'));



        }

        return $this->render('CREAMainBundle::index.html.twig', array(
            'form' => $form->createView()
        ));
    }

} 