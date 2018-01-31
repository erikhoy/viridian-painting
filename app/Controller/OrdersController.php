<?php
class OrdersController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('Client', 'Cost', 'Earning', 'Location', 'Order', 'Product', 'Status', 'Transaction', 'User');

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

        if (AuthComponent::user('id') == 12) {
            $id=358;
            echo $id;
            $order = $this->Order->get_order(1);
            //$order = $this->Order->get_order($id);
            //echo $orders['Order']['id'];
            pr($order);
            $this->set('orders', $order);
            //pr($orders);
        } else {
            $orders = $this->Order->find('all', array(
                'order' => array('Order.order_date', 'Order.order_time_start')
            ));
            pr($orders);
            $this->set('orders', $orders);
        }
        $this->set(compact('title', $title = 'Orders Dashboard : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }
    
    public function admin_index() {
        $this->set('orders', $this->Order->find('all', array(
            'order' => array('Order.order_date', 'Order.order_time_start')
        )));
    }

    public function accept_bid($id) {
        $statusId = 3;
        $this->Order->set_status_id($id, $statusId);
        $this->redirect(array('controller' => 'orders', 'action' => 'index'));
    }

    public function job_done($id) {
        $statusId = 4;
        $order = $this->Order->get_order($id);
        $name = $order['Order']['name'].' | '.$order['Order']['id'].' - Done';
        $revenue = $this->Order->get_revenue($id);
        $viridianCut = $this->Order->get_viridian_cut($revenue);
        $cogs = $this->Order->get_cogs($order['Order']['amazon_cost'], $revenue);
        $noTechnicians = $this->Order->get_number_techs($id);
        if ($noTechnicians == 0) {
            $this->Flash->error(__('The order needs to be checked out to at least one technician.'));
        }
        $expenses = $this->Order->get_expenses($revenue, $cogs, $viridianCut);
        $cash = $this->Order->get_cash($cogs, $expenses);
        /*echo 'cash: '.$cash.' + ';
        echo 'accounts receivable: '.$revenue.' = ';
        echo 'revenue: '.$revenue.' + ';
        echo 'cogs: '.$cogs.' + ';
        echo 'expenses: '.$expenses;*/
        //echo ($cash + $revenue).' = '.($revenue + $cogs + $expenses);
        //if (($cash + $revenue) == ($revenue + $cogs + $expenses)) {echo 'success';} else {echo 'error';}
        $this->Transaction->save_transaction($name, $cash, $revenue, $revenue, $cogs, $expenses);
        $this->Order->set_status_id($id, $statusId);
        $this->redirect(array('controller' => 'orders', 'action' => 'index'));
    }

    public function receive_payment($id) {
        $statusId = 5;
        $order = $this->Order->get_order($id);
        $name = $order['Order']['name'].' | '.$order['Order']['id'].' - Received';
        $technicians = $order['User'];
        $viridianCut = $this->Order->get_viridian_cut($order['Order']['revenue']);
        $cogs = $this->Order->get_cogs($order['Order']['amazon_cost'], $order['Order']['revenue']);
        $expenses = $this->Order->get_expenses($id);
        $noTechnicians = $this->Order->get_number_techs($id);
        if ($noTechnicians == 0) {
            $this->Flash->error(__('The order needs to be checked out to at least one technician.'));
        }
        $noTechnicians = $this->Order->get_number_techs($id);
        $grossIncome = $this->Order->get_gross_income($order['Order']['revenue'], $viridianCut, $cogs, $expenses); 
        $earning = $this->Order->get_earning($grossIncome, $noTechnicians);
        foreach ($technicians as $technician):
            $this->Earning->create();
            $this->Earning->set(array('user_id' => $technician['id'], 'order_id' => $order['Order']['id'], 'amount' => $earning));
            $this->Earning->save();
        endforeach;
        $cash = $order['Order']['revenue'];
        $accountsReceivable = -($cash);
        $this->Transaction->save_transaction($name, $cash, $accountsReceivable, 0, 0, 0);
        $this->Order->set_status_id($id, $statusId);
        $this->redirect(array('controller' => 'orders', 'action' => 'index'));
    }

    public function pay_tech($orderId, $userId) {
        $statusId = 6;
        $order = $this->Order->get_order($orderId);
        $earning = $this->Earning->find('all', array('conditions' => array('Earning.order_id' => $orderId, 'Earning.user_id' => $userId)));
        $this->Earning->id = $earning[0]['Earning']['id'];
        $this->Earning->set('paid', 1);
        $this->Earning->save();
        $this->Order->set_status_id($orderId, $statusId);
        $this->redirect(array('controller' => 'earnings', 'action' => 'index'));
    }
    
    public function cancel_order($id) {
        $statusId = 7;
        $order = $this->Order->get_order($id);
        $this->Order->set_status_id($id, $statusId);
        $this->redirect(array('controller' => 'orders', 'action' => 'index'));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->Order->create();
            if ($this->Order->save($this->request->data)) {
                if ($this->request->data['Order']['other_cost'] == 1) {
                    $id = $this->Order->id;
                    $cost = $this->request->data['Order']['cost'];
                    $description = $this->request->data['Order']['description'];
                    $this->Cost->create();
                    $this->Cost->set(array('order_id' => $id, 'cost' => $cost, 'description' => $description));
                    $this->Cost->save();
                }
                $this->Flash->success(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your client.'));
            //pr($this->request->data);
            
        }
        $this->set('products', $this->Product->find('list', array('order' => array('Product.name' => 'asc'))));
        $this->set('statuses', $this->Status->find('list'));
        $this->set('users', $this->User->find('list'));
        $this->set(compact('title', $title = 'Add Order : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }

    public function estimate($id = null) {
        if(!$id) {
            throw new NotFoundException(_('Invalid order'));
        }

        $order = $this->Order->findById($id);
        if(!$order) {
            throw new NotFoundException(_('Invalid order'));
        }
        /**/
        if (!$this->request->data) {
            $this->request->data = $order;
        }
        $this->set('products', $this->Product->find('list', array('order' => array('Product.name' => 'asc'))));
        $this->set(compact('title', $title = 'Estimate Order : Viridian Painting'));
        $this->set(compact('description', $description = ''));
        $this->set('order',$order);
        //$this->set(compact('title', $title = 'Estimate order : Viridian Painting'));
        //$this->set(compact('description', $description = ''));
    }

    public function view_estimate($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid order'));
        }

        $order = $this->Order->findById($id);
        if (!$order) {
            throw new NotFoundException(__('Invalid order'));
        }

        if ($this->request->is('post')) {
            $data = $this->request->data;
            $estimate = $this->Order->get_estimate($data);
            $bid = $estimate[0];
            $this->Order->id = $id;
            $this->Order->set(array('revenue' => $bid, 'status_id' => 2));
            $this->Order->save();
            $this->set('estimate', $estimate);

        }
        $this->set('order', $order);
        $this->set(compact('title', $title = 'View Estimate : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }
    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $order = $this->Order->findById($id);
        if (!$order) {
            throw new NotFoundException(__('Invalid order'));
        }
        $this->set('order', $order);
        $this->set(compact('title', $title = 'View Order : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }
    
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid order'));
        }

        $order = $this->Order->get_order($id);
        if (!$order) {
            throw new NotFoundException(__('Invalid order'));
        }
        //pr($order);
        echo $order['Order']['id']."<br>";
        echo $order['Order']['name']."<br>";
        echo $order['Order']['client_address']."<br>";
        echo $order['Order']['client_order_no']."<br>";
        echo $order['Order']['status_id']."<br>";
        echo $order['Order']['note']."<br>";
        pr($order);
        if ($this->request->is(array('post', 'put'))) {
            $this->Order->id = $id;
            
            if ($this->Order->save($this->request->data)) {
                if ($this->request->data['Order']['other_cost'] == 1) {
                    $id = $this->Order->id;
                    $cost = $this->request->data['Order']['cost'];
                    $description = $this->request->data['Order']['description'];
                    $this->Cost->create();
                    $this->Cost->set(array('order_id' => $id, 'cost' => $cost, 'description' => $description));
                    $this->Cost->save();
                }
                $this->Flash->success(__('Your order has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your order.'));
        }

        if (!$this->request->data) {
            $this->request->data = $order;
        }
        $this->set('costs', $this->Cost->find('all', array(
            'conditions' => array('Cost.order_id' => $id))));
        $this->set('products', $this->Product->find('list', array('order' => array('Product.name' => 'asc'))));
        $this->set('statuses', $this->Status->find('list'));
        $this->set('users', $this->User->find('list'));
        $this->set(compact('title', $title = 'Edit Order : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }


    public function view_completed_orders() {
        $start = date('Y');
        echo $start;
        $this->set('orders', $this->Order->find('all', array(
            'conditions' => array('Order.status_id' => 6, 'Order.order_date LIKE' => '%2017%'),
            'order' => array('Order.order_date', 'Order.order_time_start')
        )));
        $this->set(compact('title', $title = 'Orders Dashboard : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }

    public function display_reference_list() {
        $this->set('services', $this->Product->find('list', array('order' => array('Product.name'))));
        $this->set('cities', $this->Location->find('list', array('order' => array('Location.name'))));
        $this->set(compact('title', $title = 'Order Claiming Reference List : Viridian Painting'));
        $this->set(compact('description', $description = ''));
    }

/*
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