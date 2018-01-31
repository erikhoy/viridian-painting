<div class="row">
	<div class="page-heading col col-md-offset-1 col-xs-12">
		<h1><?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index')); ?> > View Order</h1>
	</div>
</div>
<div class="row">
	<div class="col col-md-offset-1 col-xs-12 col-md-10">
		<strong><?php echo $order['Order']['name']; ?></strong>
	</div>
	<div class="col col-md-offset-1 col-xs-12 col-md-10">
		Client Order Number: <?php echo $order['Order']['client_order_no']; ?>
	</div>
	<div class="col col-md-offset-1 col-xs-10">
		Client Address: <?php echo $order['Order']['client_address']; ?>
	</div>
	<div class="col col-md-offset-1 col-xs-12 col-md-10">
		Client Phone: <?php echo $order['Order']['client_phone']; ?>
	</div>
	<div class="col col-md-offset-1 col-xs-12 col-md-10">
		Client Email: <?php echo $order['Order']['client_email']; ?>
	</div>
	<div class="col col-md-offset-1 col-xs-12 col-md-10">
		Appointment Date: <?php echo $order['Order']['order_date']; ?>
	</div>
	<div class="col col-md-offset-1 col-xs-12 col-md-10">
		Appointment Window: <?php echo $order['Order']['order_time_start']." - ".$order['Order']['order_time_end']; ?>
	</div>
	<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
		Product Name: <?php echo $order['Product']['name']; ?>
	</div>
	<div class="col col-xs-offset-1 col-md-12 col-md-10">
		Order Status: <?php echo $order['Status']['name']; ?>
	</div>
	<div class="clearfix col col-xs-offset-1 col-xs-10">
		Order Revenue: <?php echo '$'.$order['Order']['revenue']; ?>
	</div>
</div>