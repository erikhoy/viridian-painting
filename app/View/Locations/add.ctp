<div class="row">
	<div class="page-heading col col-xs-12">
		<h1>Add City</h1>
	</div>
</div>
<div class="row">
	<div class="testimonial col col-xs-12 col-md-offset-3 col-md-6">
		<?php
			echo $this->Form->create('Location');
			echo $this->Form->input('name', array('label' => 'City Name', 'autofocus' => 'autofocus'));
			echo $this->Form->end('Save City');
		?>
	</div>
</div>
