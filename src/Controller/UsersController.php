<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


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

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow([/*'add', */'home','logout', 'login', 'register']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Invalid username or password, try again');
        }
    }

    public function register(){

        echo 'layaut Register';
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    public function home(){
        echo 'layaut home';

    }

    public function index(){
        $users = $this->paginate($this->Users);//Users->find('all');
        $this->set('users', $users);
    }
    public function view($parameter){
        $users = $this->Users->find();
        return $users;
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



};