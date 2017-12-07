<?php
/**
 * Class JeuxController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Core\Controller;

class JeuxController extends Controller
{

    public function jeuxAcceuil()
    {
        $this->display('jeux/acceuil.html.twig', array(
            'URL' => URL
        ));
    }

    public function jeuxJeux()
    {
        $this->display('jeux/jeux.html.twig', array(
            'URL' => URL
        ));
    }
}