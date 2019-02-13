<?php


namespace Planck\Extension\CMS\Module\SiteTree\Router;



use Planck\Extension\CMS\Model\Entity\SiteTree;
use Planck\Extension\EntityEditor\EntityTreeApiRouter;






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