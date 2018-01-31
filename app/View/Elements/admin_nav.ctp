<div class="row">
  <div class="col col-xs-12">
    <p class="text-right">Call today! <?php echo $this->Html->link('720.376.4089', 'tel:7203764089'); ?><br>
      <?php echo $this->Html->link('info@viridianpainting.com', 'mailto:info@viridianpainting.com'); ?></p>
  </div>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo $this->Html->image('logo.png', array('url' => array('controller' => 'pages', 'action' => 'index'))); ?>
      <?php //echo $this->Html->link('Viridian Painting & Assembly', array('controller' => 'pages', 'action' => 'index')); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Website <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Painting', array('controller' => 'services', 'action' => 'painting')); ?></li>
            <li><?php echo $this->Html->link('Assemblies', array('controller' => 'services', 'action' => 'assemblies')); ?></li>
            <li><?php echo $this->Html->link('Gallery', array('controller' => 'pages', 'action' => 'gallery')); ?></li>
            <li><?php echo $this->Html->link('Testimonials', array('controller' => 'testimonials', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Add Testimonial', array('controller' => 'testimonials', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'about')); ?></li>
            <li><?php echo $this->Html->link('Contact', array('controller' => 'pages', 'action' => 'contact')); ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orders <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Orders Dashboard', array('controller' => 'orders', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Add Order', array('controller' => 'orders', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link('Add Product', array('controller' => 'products', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link('Claiming a Job', array('controller' => 'orders', 'action' => 'display_reference_list')); ?></li>
          </ul>
        </li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accounting <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php //echo $this->Html->link('Transactions', array('controller' => 'transactions', 'action' => 'index')); ?></li>
            <li><?php //echo $this->Html->link('Add Transaction', array('controller' => 'transactions', 'action' => 'add')); ?></li>
            
          </ul>
        </li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Users Home', array('controller' => 'users', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link('Payroll', array('controller' => 'earnings', 'action' => 'index')); ?></li>
          </ul>
        </li>
        <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>