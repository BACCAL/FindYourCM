<?php

namespace FYCM\EspaceClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FYCMEspaceClientBundle:Default:index.html.twig');
    }
}
