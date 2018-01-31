<div class="row">
    <div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
        <h1>Blog Posts</h1>
    </div>
    <div class="cta col col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-4">
        <?php echo $this->Html->link('Contact Us Today for a Free Quote!', array('controller' => 'pages', 'action' => 'contact'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
    </div>
</div>
<div class="row">
    <div class="blog-posts col col-xs-offset-1 col-xs-10">
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h2><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?></h2>
                <p><?php echo $post['Post']['body']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>