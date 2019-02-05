<?php

namespace Planck\Extension\CMS\Module\SiteTree\Router;


use Planck\Extension\CMS\Model\Entity\SiteTree;
use Planck\Extension\CMS\Module\Site\View\Configuration;

class Main extends \Planck\Router
{
    public function registerRoutes()
    {

        $this->get('site-tree-configuration', '`/site-tree-configuration`', function() {

            $entity = $this->getApplication()->getModelEntity(SiteTree::class);


            echo 'hello world';
        })->html();


    }


}

