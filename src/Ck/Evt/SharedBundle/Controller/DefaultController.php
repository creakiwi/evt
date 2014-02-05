<?php

namespace Ck\Evt\SharedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CkEvtSharedBundle:Default:index.html.twig', array('name' => $name));
    }
}
