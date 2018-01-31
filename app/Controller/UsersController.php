<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    /*public $components = array(
        '',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'records',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'records',
                'action' => 'index',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );*/

    public function isAuthorized($user) {
    // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }
    
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('logout');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
        $this->set(compact('title', $title = 'Login : Viridian Painting & Property Services'));
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        $this->set(compact('title', $title = 'Users : Viridian Painting & Property Services'));
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
        $this->set(compact('title', $title = 'Add User : Viridian Painting & Property Services'));
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
        $this->set(compact('title', $title = 'Edit User : Viridian Painting & Property Services'));
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

}
?>