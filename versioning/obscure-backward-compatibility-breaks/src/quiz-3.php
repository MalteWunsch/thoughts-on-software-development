<?php

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MyController
{
    /** @Route("/second/") */
    public function mySecondAction($requestParams) {
        // ...
    }

    /** @Route("/{requestParams}/") */
    public function myFirstAction($requestParams) {
        // ...
    }
}
