<div class="row">
	<div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
		<h1><?php echo $this->Html->link('Reviews', array('controller' => 'reviews', 'action' => 'index')); ?> > Add Review</h1>
	</div>
</div>
<div class="row">
	<div class="testimonial col col-xs-offset-1 col-xs-10">
		<?php
			echo $this->Form->create('Review');
			echo $this->Form->input('name', array('label' => 'Reviewer Name', 'placeholder' => 'First & Last Name'));
			echo $this->Form->input('review', array('label' => 'Review'));
			echo $this->Form->end('Save Review');
		?>
	</div>
</div>
