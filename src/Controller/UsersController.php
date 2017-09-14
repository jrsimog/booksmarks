<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    
    public function index(){
        $users = $this->Users->find('all');
        $this->set('users', $users);
//        echo 'listado de usuarios';
//        exit();
    }
    public function view($parameter){
        echo 'View usuarios ' . $parameter;
        exit();
    }
    public function add(){
        echo 'agregado de usuario';
        exit();
    }

}
