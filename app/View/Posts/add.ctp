<div class="row">
	<div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
		<h1>Add Post</h1>
	</div>
</div>
<div class="row">
	<div class="about col col-xs-offset-1 col-xs-10">
		<?php
			echo $this->Form->create('Post');
			echo $this->Form->input('title');
			echo $this->Form->input('body', array('rows' => '3'));
			echo $this->Form->end('Save Post');
		?>
	</div>
</div>
