<div class="row">
	<div class="page-heading col col-xs-12">
		<h1><?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index')); ?> > Estimate Order</h1>
	</div>
</div><div class="row">
	<?php echo $this->Form->create('Order', array('action' => 'view_estimate', $order['Order']['id'])); ?>
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
	<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('product_id', array('label' => 'Product', 'empty' => 'select one:')); ?>
	</div>
	<?php if($this->request->data['Order']['product_id'] == 1) { ?>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Living Room</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('livingroom', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('livingroom_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('livingroom_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Family Room</h2>
		</div>
		<div class="col col-xs-10 col-xs-offset-1 col-md-3">
			<?php echo $this->Form->input('familyroom', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-10 col-xs-offset-1 col-md-3">
			<?php echo $this->Form->input('familyroom_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-10 col-xs-offset-1 col-md-3">
			<?php echo $this->Form->input('familyroom_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Kitchen</h2>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('kitchen', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('kitchen_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('kitchen_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Main Bedroom</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('mainbedroom', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('mainbedroom_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('mainbedroom_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Bedroom 1</h2>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom1', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom1_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom1_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Bedroom 2</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom2', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom2_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom2_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Bedroom 3</h2>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom3', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom3_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom3_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Bedroom 4</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom4', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom4_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bedroom4_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Bathroom 1</h2>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom1', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom1_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom1_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Bathroom 2</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom2', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom2_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom2_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Bathroom 3</h2>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom3', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom3_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('bathroom3_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Office</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('office', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('office_ceiling', array('label' => 'Ceiling', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('office_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
	<?php } else if($this->request->data['Order']['product_id'] == 2) { ?>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Front</h2>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('front', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('front_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Back</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('back', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('back_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Side 1</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('side1', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('side1_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Side 2</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('side2', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('side2_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Garage</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('garage', array('label' => 'Walls', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('garage_trim', array('label' => 'Trim', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
		<div class="clearfix col col-xs-offset-1 col-xs-10">
			<h2>Deck</h2>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-3">
			<?php echo $this->Form->input('deck', array('label' => 'Deck', 'type' => 'text', 'size' => '4', 'maxlength' => '4')); ?>
		</div>
	<?php } ?>
	<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-2">
		<?php echo $this->Form->end('Submit Estimate'); ?>
	</div>
</div>