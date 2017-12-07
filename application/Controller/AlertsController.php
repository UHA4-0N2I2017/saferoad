<?php

/**
 * Class AlertsController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Core\Controller;

class AlertsController extends Controller
{

    public function index()
    {
        $this->display('alerts/index.html.twig', array(
            'URL' => URL
        ));
    }

    public function personal() {
        $this->display('alerts/personal.html.twig', array(
           'URL' => URL
        ));
    }

}
