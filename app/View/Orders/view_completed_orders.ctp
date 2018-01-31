<div class="row">
    <div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
        <h1><?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index')); ?> > View Completed Orders</h1>
    </div>
    <div class="cta col col-md-offset-1 col-xs-6 col-md-offset-0 col-md-4">
        <?php echo $this->Html->link('Add Order', array('controller' => 'orders', 'action' => 'add'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
    </div>
</div>
<div class="row">
    <div class="orders col col-md-offset-1 col-xs-12 col-md-10">
        <table>
            <?php if (!empty($orders)) { ?>
                <?php $order_total = 0; ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                        <td><?php echo $order['Order']['client_address']; ?></td>
                        <td style="white-space: nowrap;"><?php echo date("M j", strtotime($order['Order']['order_date'])); ?></td>
                        <td><?php echo $order['Product']['name']; ?></td>
                        <td><?php echo $order['Order']['revenue']; ?></td>
                        <td><?php 
                                if ($order['Order']['amazon_cost'] == 1) {
                                    echo ($order['Order']['revenue'])*.2;
                                } 
                        ?></td>
                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Estimate', array('controller' => 'orders', 'action' => 'estimate', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Cancel', array('controller' => 'orders', 'action' => 'cancel_order', $order['Order']['id'], 7)); ?></td>
                    </tr>
                    <?php $order_total += $order['Order']['revenue']; ?>
                <?php endforeach; ?>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo '$'.$order_total; ?></td>
                    <td></td>
                </tr>
            <?php } else { echo 'No orders to display'; } ?>
        </table>
    </div>
</div>