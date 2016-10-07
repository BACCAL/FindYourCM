<?php

namespace FYCM\EspaceCMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FYCMEspaceCMBundle:Default:index.html.twig');
    }
}
