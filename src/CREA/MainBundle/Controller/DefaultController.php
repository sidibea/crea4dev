<?php

namespace CREA\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CREAMainBundle:Default:index.html.twig');
    }
}
