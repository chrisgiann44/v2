<?php

namespace Neoan3\Component\Header;

use Neoan3\Frame\VastN3;

/**
 * Class TestController
 * @package Neoan3\Component\Header
 *
 * Generated by neoan3-cli for neoan3 v3.*
 */

class HeaderController extends VastN3 {
    /**
     * Route: Test
     */
    function init(): void
    {
        $this->renderer->includeElement('Header', []);
        $this->output();
    }

}
