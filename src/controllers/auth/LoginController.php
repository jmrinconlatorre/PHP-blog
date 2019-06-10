<?php
namespace App\controllers\auth;
use App\DoctrineManager;
use App\models\entities\User;
use App\controllers\Controller;

class LoginController extends Controller{
    
    private $error;

    public function index(){
        $this->viewManager->renderTemplate('\auth\login.view.html');
    }

    public function login(DoctrineManager $doctrine){
        $email = $_POST['email'];
        $password = $_POST['passwd'];
        $repository=$doctrine->em->getRepository(User::class);
        $user = $repository->findOneByEmail($email);
        if(!$user){
            $this->error= "El usuario no existe";
            $this->viewManager->renderTemplate('\auth\login.view.html',['error'=>$this->error]);//array asociativo
        }      
        if($user->password!==sha1($password)){//sha1 es encriptación
            $this->error = "El usuario o password es incorrecto";
            return $this->viewManager->renderTemplate('\auth\login.view.html',['error'=>$this->error]);
        } 

        $this->sessionManager->put('user',$user->email);
        $this->redirectTo('dashboard');
    }

}