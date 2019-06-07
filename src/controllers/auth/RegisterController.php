<?php
namespace App\controllers\auth;

use App\DoctrineManager;
use App\models\entities\User;
use App\controllers\Controller;

use Kint;

class RegisterController extends Controller{

    public function index (/*DoctrineManager $doctrine*/){
       

        $this->viewManager->renderTemplate('\auth\register.view.html');
    }

    public function register(DoctrineManager $doctrine){
        echo 'REGISTRO HECHO';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['passwd'];
        //$user = $doctrine->em->getRepository(\App\models\entities);
        $user = new \App\models\entities\User();//lo hacemos asi porque solo recupera el user, el de arriba es user mas metodos
        $user->name = $name;
        $user->email = $email;
        $user->password = sha1($password);
      
        $doc = $this->container->get(DoctrineManager::class);
        Kint::dump($doctrine);
        $doctrine->em->persist($user);
        $doctrine->em->flush();
       // Kint::dump($user);
    }
}