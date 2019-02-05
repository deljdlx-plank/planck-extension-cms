<?php

namespace Planck\Extension;


use Planck\Application;
use Planck\Extension;

class CMS extends Extension
{


    public function __construct(Application $application)
    {
        parent::__construct($application, 'Planck\Extension\CMS', __DIR__.'/../..');
    }


}
