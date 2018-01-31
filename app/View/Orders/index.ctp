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
            $order_total = 0;
            $job_to_bid = 1;
            $bid_pending = 2;
            $job_pending = 3;
            $job_invoiced = 4;
            $pay_tech = 5;
            $complete_order = 6;
            $canceled_order = 7; 
            pr($orders);
        ?>

        <div class="tabs">
            <ul>
                <li><a href="#tabs-1">Calendar</a></li>
                <li><a href="#tabs-2">Jobs to Bid</a></li>
                <li><a href="#tabs-3">Pending Bids</a></li>
                <li><a href="#tabs-4">Pending Orders</a></li>
                <li><a href="#tabs-5">Invoiced Orders</a></li>
            </ul>
            <div id="tabs-1">
                <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=fj9nih9uqrh6or7v84pklhh8is%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FDenver" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
            <div id="tabs-2">
                <table>
                    <?php if (!empty($orders)) { ?>
                        <?php foreach ($orders as $order): ?>
                            <?php if ($order['Order']['status_id'] == $job_to_bid) { ?>
                                
                                    <tr>
                                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td><?php echo $order['Order']['client_address']; ?></td>
                                                    <td style="white-space: nowrap;"><?php echo date("M j", strtotime($order['Order']['order_date'])); ?></td>
                                                    <td><?php echo date("gA", strtotime($order['Order']['order_time_start'])); ?></td>
                                                    <td><?php echo date("gA", strtotime($order['Order']['order_time_end'])); ?></td>
                                                    <td><?php echo $order['Product']['name']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">* <?php echo $order['Order']['notes']; ?></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Estimate', array('controller' => 'orders', 'action' => 'estimate', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Cancel', array('controller' => 'orders', 'action' => 'cancel_order', $order['Order']['id'], $canceled_order)); ?></td>
                                    </tr>
                                <?php $order_total += $order['Order']['revenue']; ?>
                            <?php } ?>
                        <?php endforeach; ?>
                    <?php } else { echo 'No orders to display'; } ?>
                </table>
            </div>
            <?php $order_total = 0; ?>
            <div id="tabs-3">
                <table>
                    <?php if (!empty($orders)) { ?>
                        <?php foreach ($orders as $order): ?>
                            <?php if ($order['Order']['status_id'] == $bid_pending) { ?>
                                
                                    <tr>
                                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                                        <td><?php echo $order['Order']['client_address']; ?></td>
                                        <td style="white-space: nowrap;"><?php echo date("M j", strtotime($order['Order']['order_date'])); ?></td>
                                        <td><?php echo date("gA", strtotime($order['Order']['order_time_start'])); ?></td>
                                        <td><?php echo date("gA", strtotime($order['Order']['order_time_end'])); ?></td>
                                        <td><?php echo $order['Product']['name']; ?></td>
                                        <td><?php echo '$'.$order['Order']['revenue']; ?></td>
                                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Accept', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Cancel', array('controller' => 'orders', 'action' => 'cancel_order', $order['Order']['id'], $canceled_order)); ?></td>
                                    </tr>
                                <?php $order_total += $order['Order']['revenue']; ?>
                            <?php } ?>
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
            <?php $order_total = 0; ?>
            <div id="tabs-4">
                <table>
                    <?php if (!empty($orders)) { ?>
                        <?php foreach ($orders as $order): ?>

                            <?php if ($order['Order']['status_id'] == $job_pending) { ?>
                                <?php echo($order['Order']['notes']); ?>
                                    <tr>
                                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                                        <td><?php echo $order['Order']['client_address']; ?></td>
                                        <td style="white-space: nowrap;"><?php echo date("M j", strtotime($order['Order']['order_date'])); ?></td>
                                        <td><?php echo date("gA", strtotime($order['Order']['order_time_start'])); ?></td>
                                        <td><?php echo date("gA", strtotime($order['Order']['order_time_end'])); ?></td>
                                        <td><?php echo $order['Product']['name']; ?></td>
                                        <td><?php echo '$'.$order['Order']['revenue']; ?></td>
                                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?>&nbsp;|&nbsp;<?php echo $this->Html->link('Done', array('controller' => 'orders', 'action' => 'job_done', $order['Order']['id'])); ?>&nbsp;|&nbsp;<?php echo $this->Html->link('Cancel', array('controller' => 'orders', 'action' => 'cancel_order', $order['Order']['id'], $canceled_order)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">* <?php echo $order['Order']['notes']; ?></td>
                                    </tr>
                                <?php $order_total += $order['Order']['revenue']; ?>
                            <?php } ?>
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
            <?php $order_total = 0; ?>
            <div id="tabs-5">
                <table>
                    <?php if (!empty($orders)) { ?>
                        <?php foreach ($orders as $order): ?>
                            <?php if ($order['Order']['status_id'] == $job_invoiced) { ?>
                                
                                    <tr>
                                        <td><strong><?php echo $order['Order']['name']; ?></strong></td>
                                        <td><?php echo $order['Order']['client_order_no']; ?></td>
                                        <td style="white-space: nowrap;"><?php echo date("M j", strtotime($order['Order']['order_date'])); ?></td>
                                        <td><?php echo date("gA", strtotime($order['Order']['order_time_start'])); ?></td>
                                        <td><?php echo date("gA", strtotime($order['Order']['order_time_end'])); ?></td>
                                        <td><?php echo $order['Product']['name']; ?></td>
                                        <td><?php echo '$'.$order['Order']['revenue']; ?></td>
                                        <td><?php echo $this->Html->link('Edit', array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?> | <?php echo $this->Html->link('Received', array('controller' => 'orders', 'action' => 'receive_payment', $order['Order']['id'])); ?></td>
                                    </tr>
                                <?php $order_total += $order['Order']['revenue']; ?>
                            <?php } ?>
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
        <div>
            <?php echo $this->Html->link('Completed Orders', array('controller' => 'orders', 'action' => 'view_completed_orders'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
            <?php echo $this->Html->link('Cancelled Orders', array('controller' => 'orders', 'action' => 'view_cancelled_orders'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
        </div>
    </div>
</div>