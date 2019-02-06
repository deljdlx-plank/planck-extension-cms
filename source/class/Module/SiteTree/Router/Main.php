<?php

namespace Planck\Extension\CMS\Module\SiteTree\Router;


use Phi\HTML\CSSFile;
use Phi\HTML\JavascriptFile;
use Planck\Extension\CMS\Model\Entity\SiteTree;
use Planck\Extension\CMS\Module\Site\View\Configuration;

class Main extends \Planck\Router
{
    public function registerRoutes()
    {

        $this->get('site-tree-configuration', '`/site-tree-configuration`', function() {

            $assets = $this->router->getAssets();
            $assets[] = new JavascriptFile('vendor/jstree/dist/jstree.js');
            $assets[] = new CSSFile('vendor/jstree/dist/themes/default/style.css');


            $javascriptBootstrap = $this->getLocalJavascriptFile(
                $this->router->getExtension()->getJavascriptsFilepath().'/bootstrap/siteTree.js'
            );
            $assets[] = $javascriptBootstrap;



            $this->response->addExtraData('resources', $assets);

            echo '<div class="plk-site-tree-container"></div>';



        })->html();


    }


}

