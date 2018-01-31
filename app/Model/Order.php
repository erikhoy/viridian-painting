<?php 
class Order extends AppModel {
	public $hasAndBelongsToMany = array('User');

    public $hasMany = array('Cost');
	
    public $belongsTo = array('Product', 'Status');
/*
    public function getPendingJobs() {
    	$pendingJobs = $this->find('all', array(
    		'conditions' => array('Order.status_id' => '3'),
    		'order' => array('Order.order_date', 'Order.order_time_start')
    	));
    	return $pendingJobs;
    }

    public function getInvoicedJobs() {
    	$invoicedJobs = $this->find('all', array(
    		'conditions' => array('Order.status_id' => '4'),
    		'order' => array('Order.order_date', 'Order.order_time_start')
    	));
    	return $invoicedJobs;
    }
*/
    public function get_order($id) {
        $order = $this->findById($id);
        pr($order);
        return $order;
    }

    public function get_estimate($data) {
        if (!$data) {echo 'no data';}
        if ($data) {
            if($data['Order']['product_id'] == 1) {
                $livingroom = $familyroom = $office = $kitchen = $bedroom1 = $bedroom2 = $bedroom3 = $bedroom4 = $bathroom1 = $bathroom2 = $bathroom3 = 0;
                $livingroom = $data['Order']['livingroom'];
                $livingroom_ceiling = $data['Order']['livingroom_ceiling'];
                $livingroom_trim = $data['Order']['livingroom_trim'];
                $familyroom = $data['Order']['familyroom'];
                $familyroom_ceiling = $data['Order']['familyroom_ceiling'];
                $familyroom_trim = $data['Order']['familyroom_trim'];
                $office = $data['Order']['office'];
                $office_ceiling = $data['Order']['office_ceiling'];
                $office_trim = $data['Order']['office_trim'];
                $kitchen = $data['Order']['kitchen'];
                $kitchen_ceiling = $data['Order']['kitchen_ceiling'];
                $kitchen_trim = $data['Order']['kitchen_trim'];
                $mainbedroom = $data['Order']['mainbedroom'];
                $mainbedroom_ceiling = $data['Order']['mainbedroom_ceiling'];
                $mainbedroom_trim = $data['Order']['mainbedroom_trim'];
                $bedroom1 = $data['Order']['bedroom1'];
                $bedroom1_ceiling = $data['Order']['bedroom1_ceiling'];
                $bedroom1_trim = $data['Order']['bedroom1_trim'];
                $bedroom2 = $data['Order']['bedroom2'];
                $bedroom2_ceiling = $data['Order']['bedroom2_ceiling'];
                $bedroom2_trim = $data['Order']['bedroom2_trim'];
                $bedroom3 = $data['Order']['bedroom3'];
                $bedroom3_ceiling = $data['Order']['bedroom3_ceiling'];
                $bedroom3_trim = $data['Order']['bedroom3_trim'];
                $bedroom4 = $data['Order']['bedroom4'];
                $bedroom4_ceiling = $data['Order']['bedroom4_ceiling'];
                $bedroom4_trim = $data['Order']['bedroom4_trim'];
                $bathroom1 = $data['Order']['bathroom1'];
                $bathroom1_ceiling = $data['Order']['bathroom1_ceiling'];
                $bathroom1_trim = $data['Order']['bathroom1_trim'];
                $bathroom2 = $data['Order']['bathroom2'];
                $bathroom2_ceiling = $data['Order']['bathroom2_ceiling'];
                $bathroom2_trim = $data['Order']['bathroom2_trim'];
                $bathroom3 = $data['Order']['bathroom3'];
                $bathroom3_ceiling = $data['Order']['bathroom3_ceiling'];
                $bathroom3_trim = $data['Order']['bathroom3_trim'];

                $livingroom_total = $livingroom + $livingroom_ceiling + $livingroom_trim;
                $familyroom_total = $familyroom + $familyroom_ceiling + $familyroom_trim;
                $kitchen_total = $kitchen + $kitchen_ceiling + $kitchen_trim;
                $office_total = $office + $office_ceiling + $office_trim;
                $mainbedroom_total = $mainbedroom + $mainbedroom_ceiling + $mainbedroom_trim;
                $bedroom1_total = $bedroom1 + $bedroom1_ceiling + $bedroom1_trim;
                $bedroom2_total = $bedroom2 + $bedroom2_ceiling + $bedroom2_trim;
                $bedroom3_total = $bedroom3 + $bedroom3_ceiling + $bedroom3_trim;
                $bedroom4_total = $bedroom4 + $bedroom4_ceiling + $bedroom4_trim;
                $bathroom1_total = $bathroom1 + $bathroom1_ceiling + $bathroom1_trim;
                $bathroom2_total = $bathroom2 + $bathroom2_ceiling + $bathroom2_trim;
                $bathroom3_total = $bathroom3 + $bathroom3_ceiling + $bathroom3_trim;
        
                $estimate = $livingroom_total + $familyroom_total + $office_total + $kitchen_total + $mainbedroom_total + $bedroom1_total + $bedroom2_total + $bedroom3_total + $bedroom4_total + $bathroom1_total + $bathroom2_total + $bathroom3_total;
                $estimateArray = array($estimate, $livingroom_total, $familyroom_total, $kitchen_total, $mainbedroom_total, $bedroom1_total, $bedroom2_total, $bedroom3_total, $bedroom4_total, $bathroom1_total, $bathroom2_total, $bathroom3_total, $office_total);

            } else if($data['Order']['product_id'] == 2) {
                $front = $data['Order']['front'];
                $front_trim = $data['Order']['front_trim'];
                $back = $data['Order']['back'];
                $back_trim = $data['Order']['back_trim'];
                $side1 = $data['Order']['side1'];
                $side1_trim = $data['Order']['side1_trim'];
                $side2 = $data['Order']['side2'];
                $side2_trim = $data['Order']['side2_trim'];
                $garage = $data['Order']['garage'];
                $garage_trim = $data['Order']['garage_trim'];
                $deck = $data['Order']['deck'];

                $front_total = $front + $front_trim;
                $back_total = $back + $back_trim;
                $side1_total = $side1 + $side1_trim;
                $side2_total = $side2 + $side2_trim;
                $garage_total = $garage + $garage_trim;

                $estimate = $front_total + $back_total + $side1_total + $side2_total + $garage_total + $deck;
                $estimateArray = array($estimate, $front_total, $back_total, $side1_total, $side2_total, $garage_total, $deck);
            }
        }
        
        return $estimateArray;
    }
    public function get_revenue($id) {
        $order = $this->get_order($id);
        if ($order['Order']['revenue'] % 2 == 0) {
            return $order['Order']['revenue'];
        } else {
            return $order['Order']['revenue'] - .01;
        }
    }

    public function get_number_techs($id) {
        $order = $this->get_order($id);
        $technicians = $this->OrdersUser->find('all', array(
            'conditions' => array('OrdersUser.order_id' => $order['Order']['id'])));
        $noTechnicians = count($technicians);
        return $noTechnicians;
    }

    public function get_viridian_cut($revenue) {
        return ($revenue * .2);
    }

    public function get_cogs($amazon, $revenue) {
        $cogs = 0;
        if ($amazon == 1) {
            $cogs = ($revenue * .20);
        }
        return $cogs;
    }

    public function get_expenses($id) {
        $costs = $this->Cost->find('all', array(
            'conditions' => array('Cost.order_id' => $id)
        ));
        pr($costs);
        $expenses = 0;
        foreach ($costs as $cost):
            $cost = $cost['Cost']['cost'];
            $expenses += $cost;
        endforeach;
        return $expenses;

    }

    public function get_cash($cogs, $expenses) {
        return ($cogs + $expenses);
    }

    public function get_gross_income($revenue, $viridianCut, $cogs, $expenses) {
        return ($revenue - $viridianCut - $cogs - $expenses);   
    }

    public function get_earning($grossIncome, $noTechnicians) {
        return ($grossIncome/$noTechnicians);
    }

    public function set_status_id($id, $statusId) {
        $this->id = $id;
        $this->set('status_id', $statusId);
        if ($this->save()) {
            //return $this->redirect(array('controller' => 'orders', 'action' => 'index'));
        }
        //$this->Flash->error(__('Unable to update order'));
    }
    public function buildOrderLineItem($order) {
    	$lineItem = "<tr><td><strong>".$order['Order']['client_name']."</strong></td>";
    	$lineItem .= "<td>".$order['Order']['client_address']."</td>";
    	$lineItem .= "<td>".$order['Product']['name']."</td>";
    	$lineItem .= "<td>".$order['Order']['quote']."</td>";
    	$lineItem .= "<td>".date("M j", strtotime($order['Order']['order_date'])).", ".date("gA", strtotime($order['Order']['order_time_start']))."-".date("gA", strtotime($order['Order']['order_time_end']))."</td>";
    	$lineItem .= "<td>".$this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id']))."</td></tr>";
    	return $lineItem;
    }

    public $validate = array(
        'client_order_no' => array(
            'rule' => 'isUnique'
        )
    );
}
?>