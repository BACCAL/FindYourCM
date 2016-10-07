<?php

namespace FYCM\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FYCMGeneralBundle:Default:index.html.twig');
    }
}
