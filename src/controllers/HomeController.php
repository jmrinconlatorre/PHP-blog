<?php
namespace App\controllers;
use App\DoctrineManager;
use App\models\entities\Post;
use App\services\PostsService;
use Kint;

class HomeController extends Controller
{
    public function index(){
      // ahora lo hacemos todo con el service
      $PostsService = $this->container->get(PostsService::class);
      $posts = $PostsService->getPosts();
      
      // $doctrineManager = $this->container->get(DoctrineManager::class);
      // $repository = $doctrineManager->em->getRepository(Post::class);
      // $posts=$repository->findAll();
      
      Kint::dump($posts);
      $this->viewManager->renderTemplate("index.view.html",['posts'=>$posts]);//aqui ya le pasamos el objeto posts
    }
}