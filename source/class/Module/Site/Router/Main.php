<?php

namespace Planck\Extension\CMS\Module\Site\Router;


use Planck\Extension\CMS\Module\Site\View\Configuration;

class Main extends \Planck\Router
{
    public function registerRoutes()
    {

        $this->get('test', '`/site-configuration`', function() {
            //echo 'hello world';

            $view = new Configuration();

            echo $view->render();




        })->html();


    }


}

