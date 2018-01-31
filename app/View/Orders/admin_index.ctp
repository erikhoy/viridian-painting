<div class="row">
    <div class="page-heading col col-md-offset-1 col-xs-6 col-md-6">
        <h1>Orders</h1>
    </div>
    <div class="cta col col-md-offset-1 col-xs-6 col-md-offset-0 col-md-4">
        <?php echo $this->Html->link('Add Order', array('controller' => 'orders', 'action' => 'add'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
    </div>
</div>
<div class="row">
    <div class="orders col col-md-offset-1 col-xs-12 col-md-10">
        <?php 
            $quote_total = 0;
            $bid_pending = 2;
            $job_pending = 3;
            $job_invoiced = 4;
            $pay_tech = 5;
            $complete_order = 6;
            $canceled_order = 7; 
        ?>
        <table>
            <tr>
                <th colspan="8">Pending Jobs</th>
            </tr>
            <?php foreach ($orders as $order): ?>
                <?php if ($order['Order']['status_id'] == $job_pending) { ?>
                    <tr>
                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                        <td><?php echo $order['Order']['client_address']; ?></td>
                        <td style="white-space: nowrap;"><?php echo date("M j", strtotime($order['Order']['order_date'])); ?></td>
                        <td><?php echo date("gA", strtotime($order['Order']['order_time_start'])); ?></td>
                        <td><?php echo date("gA", strtotime($order['Order']['order_time_end'])); ?></td>
                        <td><?php echo $order['Product']['name']; ?></td>
                        <td><?php echo '$'.$order['Order']['revenue']; ?></td>
                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Done', array('controller' => 'orders', 'action' => 'job_done', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Cancel', array('controller' => 'orders', 'action' => 'cancel_order', $order['Order']['id'], $canceled_order)); ?></td>
                    </tr>
                    <?php $quote_total += $order['Order']['revenue']; ?>
                <?php } ?>
            <?php endforeach; ?>
            <tr>
                <td>Total pending</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo '$'.$quote_total; ?></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="orders col col-md-offset-1 col-xs-12 col-md-5">
        <?php $quote_total = 0; ?>
        <table>
            <tr>
                <th colspan="4">Invoiced Jobs</th>
            </tr>
            <?php foreach ($orders as $order): ?>
                <?php if ($order['Order']['status_id'] == 4) { ?>
                    <tr>
                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                        <td><?php echo '$'.$order['Order']['revenue']; ?></td>
                        <td style="white-space: nowrap;"><?php echo date("M j", strtotime($order['Order']['order_date'])); ?></td>
                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Received', array('controller' => 'orders', 'action' => 'receive_payment', $order['Order']['id'])); ?></td>
                    </tr>
                    <?php $quote_total += $order['Order']['revenue']; ?>
                <?php } ?>
            <?php endforeach; ?>
            <tr>
                <td>Total invoiced</td>
                <td><?php echo '$'.$quote_total; ?></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="orders col col-md-offset-1 col-xs-12 col-md-4">
        <?php $quote_total = 0; ?>
        <table>
            <tr>
                <th colspan="3">Pending Bids</th>
            </tr>
            <?php foreach ($orders as $order): ?>
                <?php if ($order['Order']['status_id'] == $bid_pending) { ?>
                    <tr>
                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                        <td><?php echo '$'.$order['Order']['revenue']; ?></td>
                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Accept', array('controller' => 'orders', 'action' => 'increment_status_id', $order['Order']['id'], $job_pending)); ?> | <?php echo $this->Html->link('Reject', array('controller' => 'orders', 'action' => 'increment_status_id', $order['Order']['id'], $canceled_order)); ?></td>
                    </tr>
                    <?php $quote_total += $order['Order']['revenue']; ?>
                <?php } ?>
            <?php endforeach; ?>
            <tr>
                <td>Total bid</td>
                <td><?php echo '$'.$quote_total; ?></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>