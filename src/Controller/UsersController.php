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
        echo 'listado de usuarios';
        exit();
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
