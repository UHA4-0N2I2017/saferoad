<?php
/**
 * Created by PhpStorm.
 * User: antoi
 * Date: 07/12/2017
 * Time: 21:25
 */

namespace Mini\Controller;

use Mini\Core\Controller;

class WarningController extends Controller
{

    public function index()
    {
        $this->display('Warning/index.html.twig', array(
            'URL' => URL
        ));
    }
}