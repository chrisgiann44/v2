<?php

namespace Neoan3\Component\Home;

use Neoan3\Frame\VastN3;

/**
 * Class TestController
 * @package Neoan3\Component\Home
 *
 * Generated by neoan3-cli for neoan3 v3.*
 */

class HomeController extends VastN3 {
    /**
     * Route: Test
     */
    function init(): void
    {
        $this->renderer->includeElement('Home');
        $this->hook('main', 'home', []);
        $this->output();
    }

}