<?php

namespace Planck\Extension\CMS\Model\Repository;




use Planck\Model\Repository;
use Planck\Model\Traits\IsTreeRepository;

class SiteTree extends Repository
{

    use IsTreeRepository;

    protected static $tableName = 'cms_sitetree';
}
