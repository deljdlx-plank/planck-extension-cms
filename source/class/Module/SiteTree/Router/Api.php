<?php


namespace Planck\Extension\CMS\Module\SiteTree\Router;



use Planck\Extension\CMS\Model\Entity\SiteTree;
use Planck\Extension\RichTag\Model\Entity\Category;
use Planck\Extension\ViewComponent\TreeFormater;
use Planck\Route;
use Planck\Router;





class Api extends Router
{




    public function registerRoutes()
    {


        $this->delete('delete-branch', '`/site-tree/api/delete-branch`', function () {
            $data = $this->request->getBodyData();

            $category = $this->application->getModelEntity(SiteTree::class);
            $category->loadById($data['id']);

            $category->deleteBranch(true);

            echo json_encode($category);

        })->json();



        $this->delete('delete', '`/site-tree/api/delete`', function () {
            $data = $this->request->getBodyData();

            $category = $this->application->getModelEntity(SiteTree::class);
            $category->loadById($data['id']);
            $category->delete();
            echo json_encode($category);
        })->json();


        $this->post('save', '`/site-tree/api/save`', function() {

            $data = $this->post();

            $parentCategory = $this->application->getModelEntity(SiteTree::class);
            $parentCategory->loadById($data['parent_id']);

            $newCategory = $this->application->getModelEntity(SiteTree::class);
            $newCategory->setValues($data);
            $newCategory->setParent($parentCategory);

            $newCategory->store();

            $formater = new TreeFormater();

            echo json_encode($formater->getNodeFromEntity(
                $newCategory
            ));

        })->json();


        $this->post('move', '`/site-tree/api/move`', function() {

            /**
             * @var Route $route
             */
            $route = $this->getRouter()->getRouteByName('save');
            $route->setRequest($this->request);
            $route->execute();
            echo $route->getOutput();

        })->json()
        ;



        $this->get('get-tree', '`/site-tree/api/get-tree`', function() {

            $repository = $this->application->getModelRepository(\Planck\Extension\CMS\Model\Repository\SiteTree::class);
            $tree = $repository->getTree(null, 0);
            $formater = new TreeFormater();
            echo json_encode(
                $formater->getTreeFromNodeList($tree)
            );
        })->json()
        ;

        $this->get('initialize', '`/site-tree/api/initialize`', function() {



            $category = $this->application->getModelEntity(SiteTree::class);

            $root = $category->getRoot(true);
            if(!$root) {
                $root = $this->application->getModelEntity(SiteTree::class);
                $root->setValue('name', 'root');
                $root->store();
            }
            echo json_encode(
                $root->toExtendedArray()
            );


        })->json();







        return parent::registerRoutes();
    }

}