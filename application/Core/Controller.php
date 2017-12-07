<?php

namespace Mini\Core;

use Exception;

class Controller
{
    public $twig = null;

    function __construct()
    {
        try {
            self::initializeTwig();
        } catch (Exception $e) {
            exit('Twig could not be initialized.');
        }
    }

    public function display($file, $args)
    {
        if (isset($this->twig)) {
            $this->twig->display($file, $args);
        } else {
            exit('Twig could not be initialized.');
        }
    }

    private function initializeTwig()
    {
        $loader = new \Twig_Loader_Filesystem(ROOT . 'application/view');
        $this->twig = new \Twig_Environment($loader);
    }
}