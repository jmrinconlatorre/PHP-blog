<?php
namespace App\controllers;
use App\DoctrineManager;
use App\models\entities\Post;
use Kint;

class HomeController extends Controller
{
    public function index(){
      $doctrineManager = $this->container->get(DoctrineManager::class);
      $repository = $doctrineManager->em->getRepository(Post::class);
      $posts=$repository->findAll();
      
      Kint::dump($posts);
      $this->viewManager->renderTemplate("index.view.html");
    }
}