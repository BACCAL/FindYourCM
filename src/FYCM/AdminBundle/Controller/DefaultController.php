<?php

namespace FYCM\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FYCMAdminBundle:Default:index.html.twig');
    }
}
