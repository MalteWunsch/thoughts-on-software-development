<?php

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MyController
{
    /** @Route("/{requestParams}/") */
    public function myFirstAction($requestParams) {
        // ...
    }

    /** @Route("/second/") */
    public function mySecondAction($requestParams) {
        // ...
    }
}
