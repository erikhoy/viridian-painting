<div class="row">
	<div class="page-heading col col-xs-12">
		<h1><?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index')); ?> > Edit Order</h1>
	</div>
</div><div class="row">
	<?php echo $this->Form->create('Order'); ?>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('name', array('label' => 'Client Name', 'autofocus' => 'autofocus')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('client_order_no', array('label' => 'Client Order Number')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10">
		<?php echo $this->Form->input('client_address', array('label' => 'Client Address')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('client_phone', array('label' => 'Client Phone')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('client_email', array('label' => 'Client Email', 'type' => 'email')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-3">
		<?php echo $this->Form->input('order_date', array('label' => 'Appointment Date', 'class' => 'datepicker', 'type' => 'text')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-2">
		<?php echo $this->Form->input('order_time_start', array('label' => 'Window Start', 'class' => 'timepicker', 'type' => 'text')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-2">
		<?php echo $this->Form->input('order_time_end', array('label' => 'Window End', 'class' => 'timepicker', 'type' => 'text')); ?>
	</div>
	<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('product_id', array('label' => 'Product', 'empty' => 'select one:')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('status_id', array('label' => 'Order Status ID')); ?>
	</div>
	<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('revenue', array('label' => 'Revenue')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-3">
		<?php echo $this->Form->input('User', array('label' => 'Technicians', 'multiple' => 'checkbox')); ?>
	</div>
	<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-9">
		<?php echo $this->Form->input('notes', array('label' => 'Notes', 'type' => 'textarea')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-5">
		<h2><strong>Costs of Goods Sold</strong></h2>
		<div class="col col-xs-12">
			<?php echo $this->Form->input('amazon_cost', array('label' => 'Amazon Order', 'type' => 'checkbox')); ?>
		</div>
		<div class="clearfix col col-xs-12">
			<?php echo $this->Form->input('other_cost', array('label' => 'Other type of cost', 'type' => 'checkbox', 'class' => 'other-cost')); ?>
			<div class="costs">
				<div class="col col-xs-12 col-md-5">
					<h2>Cost</h2>
				</div>
				<div class="col col-xs-12 col-md-5">
					<h2>Description</h2>
				</div>
				<?php foreach ($costs as $cost): ?>
					<div class="col col-xs-12 col-md-5">
						<?php echo $cost['Cost']['cost']; ?>
					</div>
					<div class="col col-xs-12 col-md-5">
						<?php echo $cost['Cost']['description']; ?>
					</div>
				<?php endforeach; ?>
				<div class="col col-xs-12 col-md-4">
					<?php echo $this->Form->input('cost', array('label' => 'Cost', 'type' => 'text')); ?>
				</div>
				<div class="col col-xs-12 col-md-offset-1 col-md-7">
					<?php echo $this->Form->input('description', array('label' => 'Description', 'type' => 'text')); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-2">
		<?php echo $this->Form->end('Save Order'); ?>
	</div>
</div>