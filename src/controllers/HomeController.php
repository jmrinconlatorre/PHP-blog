<?php
namespace App\controllers;
use App\DoctrineManager;
use App\models\entities\User;
use Kint;

class HomeController extends Controller
{
    public function index(){//DoctrineManager $doctrine){
     // $doctrineContainer = $this->container->get(DoctrineManager::class);
      //Kint::dump($doctrineContainer);
      //$user = $doctrine->em->getRepository(User::class)->find(2);

      $this->viewManager->renderTemplate("index.view.html");
    }
}