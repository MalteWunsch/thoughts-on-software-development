<?php

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MyController
{
    /** @Route("/first/") */
    public function myFirstAction($requestParams) {
        // ...
    }
}
