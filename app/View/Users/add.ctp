<div class="row">
	<div class="page-heading col col-xs-12">
		<h1><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?> > Add User</h1>
	</div>
</div>
<div class="row">
    <div class="users col col-md-offset-1 col-xs-12 col-md-10">
    	<?php echo $this->Form->create('User'); ?>
    		<fieldset>
        		<?php 
        			echo $this->Form->input('username');
        			echo $this->Form->input('password');
                    echo $this->Form->input('name', array('label' => 'First name'));
                    echo $this->Form->input('lastname', array('label' => 'Last name'));
        			echo $this->Form->input('role', array(
            			'options' => array('admin' => 'Admin', 'author' => 'User')
        			));
    			?>
    		</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
