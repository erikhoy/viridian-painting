<?php
class ProductsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('Order', 'Product', 'Technician');

    public function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow();
    }

    public function isAuthorized($user) {
    // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }
    
    public function index() {
        $this->set(compact('title', $title = 'Products : Viridian Painting & Property Services'));
        $this->set('technicians', $this->Technician->find('all'));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(array('action' => 'add'));
            }
            $this->Flash->error(__('Unable to add your product.'));
        }
        $this->set(compact('title', $title = 'Add Product : Viridian Painting & Property Services'));
    }

    /*public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
*/
 /*   
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid order'));
        }

        $order = $this->Order->findById($id);
        if (!$order) {
            throw new NotFoundException(__('Invalid order'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Order->id = $id;
            if ($this->Order->save($this->request->data)) {
                $this->Flash->success(__('Your order has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your order.'));
        }

        if (!$this->request->data) {
            $this->request->data = $order;
        }

        $this->set('products', $this->Product->find('list'));
        $this->set('statuses', $this->Status->find('list'));
    }
*//*
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }*/
}
?>