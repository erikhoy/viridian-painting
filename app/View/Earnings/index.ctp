<div class="row">
    <div class="page-heading col col-md-offset-1 col-xs-12 col-md-10">
        <h1>Earnings to Be Paid</h1>
    </div>
</div>
<div class="row">
    <div class="earnings col col-md-offset-1 col-xs-12 col-md-10">
        <div class="accordion">
            <?php foreach ($users as $user): ?>
                <h3><?php echo $user['User']['name']." ".$user['User']['lastname']; ?></h3>
                <div>
                    <table>
                        <tr>
                            <th>Order Id</th>
                            <th>Client Name</th>
                            <th>Earnings</th>
                            <th></th>
                        </tr>
                        <?php $quoteTotal = 0; ?>
                        <?php foreach ($earnings as $earning): ?>
                            <?php if ($user['User']['id'] == $earning['Earning']['user_id']) { ?>
                                <?php if($earning['Earning']['paid'] == 0) { ?>
                                    <tr>
                                        <td><?php echo $this->Html->link($earning['Earning']['order_id'], array('controller' => 'orders', 'action' => 'view', $earning['Earning']['order_id'])); ?></td>
                                        <td><?php echo $earning['Order']['name']; ?></td>
                                        <td>$<?php echo $earning['Earning']['amount']; ?></td>
                                        <td><?php echo $this->Html->link('Paid', array('controller' => 'orders', 'action' => 'pay_tech', $earning['Order']['id'], $earning['Earning']['user_id'])); ?></td>
                                    </tr>
                                    <?php $quoteTotal += $earning['Earning']['amount']; ?>
                                <?php } ?>
                            <?php } ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td>$<?php echo $quoteTotal; ?></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="page-heading col col-md-offset-1 col-xs-12 col-md-10">
        <h1>Earnings Paid</h1>
    </div>
</div>
<div class="row">
    <div class="earnings col col-md-offset-1 col-xs-12 col-md-10">
        <div class="accordion">
            <?php foreach ($users as $user): ?>
                <h3><?php echo $user['User']['name']." ".$user['User']['lastname']; ?></h3>
                <div>
                    <table>
                        <tr>
                            <th>Order Id</th>
                            <th>Client Name</th>
                            <th>Earnings</th>
                            <th>Date Paid</th>
                        </tr>
                        <?php $quoteTotal = 0; ?>
                        <?php foreach ($earnings as $earning): ?>
                            <?php if ($user['User']['id'] == $earning['Earning']['user_id']) { ?>
                                <?php if($earning['Earning']['paid'] == 1) { ?>
                                    <tr>
                                        <td><?php echo $this->Html->link($earning['Earning']['order_id'], array('controller' => 'orders', 'action' => 'view', $earning['Earning']['order_id'])); ?></td>
                                        <td><?php echo $earning['Order']['name']; ?></td>
                                        <td>$<?php echo $earning['Earning']['amount']; ?></td>
                                        <td style="white-space: nowrap;">
                                            <?php if ($earning['Earning']['paid_date'] != '0000-00-00 00:00:00') { ?>
                                                <?php echo date("M j Y", strtotime($earning['Earning']['paid_date'])); ?>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php $quoteTotal += $earning['Earning']['amount']; ?>
                                <?php } ?>
                            <?php } ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td>$<?php echo $quoteTotal; ?></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>