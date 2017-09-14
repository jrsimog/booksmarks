<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    ////Limite de Paginacion
    public $paginate = [
        'limit' => 5,
        'order' => [
            'Users.id' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }


    public function index(){
        $users = $this->paginate($this->Users);//Users->find('all');
        $this->set('users', $users);
    }
    public function view($parameter){
        echo 'View usuarios ' . $parameter;
        exit();
    }
    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success('El usuario se ha creado correctamente');
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            }else{
//                $x = $user->errors();
//                if ($x) {
//                    debug($user);
//                    debug($x);
//                    // if ($entity->errors()) {
//                    return false;
//                }
                $this->Flash->error('El usuario no pudo ser creado. Por Favor, Intente nuevamente ');
            }
        }
        $this->set(compact('user'));
    }

}
