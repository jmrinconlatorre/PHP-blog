<?php
namespace App;
use DI\Container;
use App\config\Config;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationRegistry;

use Kint;

class DoctrineManager{
    private $container;
    public $em;

    public function construct(Container $container){
        $this->container = $container;
        $dbconfig= Config::getDB();
        //Kint::dump($obj);
        $paths=[
            dirname(__DIR__).'/Models/Entities',
            dirname(__DIR__).'/Models/Repositories'
        ];
        $isDevMode=true;
        $config=Setup::createAnnotationMetadataConfiguration($paths,$isDevMode,null,null,false);
        AnnotationRegistry::registerLoader('class_exists');
        $this->em=EntityManager::create($dbconfig,$config);
    }
}