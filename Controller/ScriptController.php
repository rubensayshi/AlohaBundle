<?php

namespace GoGreat\AlohaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScriptController extends Controller
{
    public function initAction()
    {
        return $this->render('AlohaBundle:Script:init.html.twig');
    }
}
