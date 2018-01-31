<div class="row">
	<div class="page-heading col col-xs-12">
		<h1><?php echo $this->Html->link('Transactions', array('controller' => 'transactions', 'action' => 'index')); ?> > Add Transaction</h1>
	</div>
</div>
<div class="row">
	<?php echo $this->Form->create('Transaction'); ?>
	<div class="col col-xs-offset-1 col-xs-10 col-md-6">
		<?php echo $this->Form->input('name', array('label' => 'Transaction', 'autofocus' => 'autofocus')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-2">
		<?php echo $this->Form->input('date', array('label' => 'Date', 'class' => 'datepicker', 'type' => 'text')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('cash', array('label' => 'Cash')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('equipment', array('label' => 'Equipment')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('accounts_receivable', array('label' => 'Accounts Receivable')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('notes_payable', array('label' => 'Notes Payable')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('revenue', array('label' => 'Revenue')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('cost_of_goods_solds', array('label' => 'Cost of Goods Sold')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('selling_expenses', array('label' => 'Selling Expenses')); ?>
	</div>
	<div class="col col-xs-offset-1 col-xs-10 col-md-4">
		<?php echo $this->Form->input('misc_expenses', array('label' => 'Misc. Expenses')); ?>
	</div>
	<div class="clearfix col col-xs-offset-1 col-xs-10 col-md-2">
		<?php echo $this->Form->end('Save Transaction'); ?>
	</div>
</div>