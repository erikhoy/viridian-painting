<div class="row">
	<div class="page-heading col col-xs-12">
		<h1>Add Product</h1>
	</div>
</div>
<div class="row">
	<div class="testimonial col col-xs-12 col-md-offset-3 col-md-6">
		<?php
			echo $this->Form->create('Product');
			echo $this->Form->input('name', array('label' => 'Product Name', 'autofocus' => 'autofocus'));
			echo $this->Form->end('Save Product');
		?>
	</div>
</div>
