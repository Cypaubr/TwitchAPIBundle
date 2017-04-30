<?php

namespace Cypaubr\TwitchAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TwitchAPIBundle:Default:index.html.twig');
    }
}
