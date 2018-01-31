<div class="row">
    <div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
        <h1>Please enter your username and password</h1>
    </div>
</div>
<div class="row">
    <div class="login col col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
			<?php echo $this->Flash->render('auth'); ?>
			<?php echo $this->Form->create('User'); ?>
				<fieldset>
			        <?php echo $this->Form->input('username');
				        echo $this->Form->input('password');
				    ?>
				</fieldset>
			<?php echo $this->Form->end(__('Login')); ?>
		</div>
	</div>
</div>