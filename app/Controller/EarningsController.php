<?php
class EarningsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('Earning', 'Order', 'User');

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
        $this->set('users', $this->User->find('all'));
        $this->set('ordersUsers', $this->Order->User->find('all'));
        $this->set('earnings', $this->Earning->find('all', array(
            //'conditions' => array('Earning.paid' => 0),
            'order' => array('Earning.paid_date', 'Order.order_date', 'Earning.order_id', 'Earning.user_id'))));
        $this->set(compact('title', $title = 'Earnings : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }
}
?>