<?php
/* Generated by neoan3-cli */

namespace Neoan3\Component\NotFound;

use Neoan3\Core\Unicore;

class NotFoundController extends Unicore
{
    /**
     * Constructor
     */
    function init()
    {
        $this->uni('demo')->hook('main', 'notFound')->output();
    }


}
