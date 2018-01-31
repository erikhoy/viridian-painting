<div class="row">
    <div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
    	<h1><?php echo $this->Html->link('Blog Posts', array('controller' => 'posts', 'action' => 'index')); ?> > <?php echo h($post['Post']['title']); ?></h1>
    </div>
    <div class="cta col col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-4">
        <?php echo $this->Html->link('Contact Us Today for a Free Quote!', array('controller' => 'pages', 'action' => 'contact'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
    </div>
</div>
<div class="row">
    <div class="post col col-xs-offset-1 col-xs-10">
		<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
		<?php echo $post['Post']['body']; ?>
	</div>
</div>