<?php
class TransactionsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('Order', 'Product', 'Transaction');

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
        $this->set('transactions', $this->Transaction->find('all'));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->Transaction->create();
            if ($this->Transaction->save($this->request->data)) {
                $this->Flash->success(__('The transaction has been saved.'));
                return $this->redirect(array('action' => 'add'));
            }
            $this->Flash->error(__('Unable to add your transaction.'));
        }
    }
}
?>