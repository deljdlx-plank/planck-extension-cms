<?php


namespace Planck\Extension\CMS\Module\SiteTree\Router;



use Planck\Extension\CMS\Model\Entity\SiteTree;
use Planck\Extension\EntityEditor\EntityTreeApiRouter;
use Planck\Extension\RichTag\Model\Entity\Category;
use Planck\Extension\ViewComponent\TreeFormater;
use Planck\Route;
use Planck\Router;





class Api extends EntityTreeApiRouter
{


    public function getEntity()
    {
        return $this->application->getModelEntity(SiteTree::class);
    }

    public function getRepository()
    {
        return $this->application->getModelRepository(\Planck\Extension\CMS\Model\Repository\SiteTree::class);
    }

    public function getRoutePath()
    {
        return '/site-tree/api';
    }
}