<?php

namespace Mini\Controller;
use Mini\Core\Controller;
class WarningController extends Controller
{
    public function index()
    {
        $this->display('warning/index.html.twig', array(
            'URL' => URL
        ));
    }
}