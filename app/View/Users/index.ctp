<div class="row">
    <div class="page-heading col col-md-offset-1 col-xs-6 col-md-6">
        <h1>Users</h1>
    </div>
    <div class="cta col col-md-offset-1 col-xs-6 col-md-offset-0 col-md-4">
        <?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
    </div>
</div>
<div class="row">
    <div class="orders col col-md-offset-1 col-xs-12 col-md-10">
        <div class="col col-xs-offset-1 col-xs-10 users">
            <?php foreach ($users as $user): ?>
                <?php $name = $user['User']['name'].' '.$user['User']['lastname']; ?>
                <?php echo $this->Html->link($name, array('action' => 'view', $user['User']['id']) ); ?>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
</div>