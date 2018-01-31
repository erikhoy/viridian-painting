<div class="row">
  <div class="col col-xs-12">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/carousel_1.jpg" alt="" width="600">
          <div class="carousel-caption"><?php echo $this->Html->link('Contact Us Today for a Free Quote!', array('controller' => 'pages', 'action' => 'contact'), array('class' => 'btn btn-default animated zoomIn', 'role' => 'button')); ?></div>
            
        </div>
        <div class="item">
          <img src="img/IrvingStreet/irving_5.jpg" alt="" width="600">
          <div class="carousel-caption"><?php echo $this->Html->link('Contact Us Today for a Free Quote!', array('controller' => 'pages', 'action' => 'contact'), array('class' => 'btn btn-default animated zoomIn', 'role' => 'button')); ?></div>
        </div>
        <div class="item">
          <img src="img/carousel_3.jpg" alt="" width="600">
          <div class="carousel-caption"><?php echo $this->Html->link('Contact Us Today for a Free Quote!', array('controller' => 'pages', 'action' => 'contact'), array('class' => 'btn btn-default animated zoomIn', 'role' => 'button')); ?></div>
        </div>
        <div class="item">
          <img src="img/pinewalk_1.jpg" alt="" width="600">
          <div class="carousel-caption"><?php echo $this->Html->link('Contact Us Today for a Free Quote!', array('controller' => 'pages', 'action' => 'contact'), array('class' => 'btn btn-default animated zoomIn', 'role' => 'button')); ?></div>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="home col col-xs-offset-1 col-xs-10 col-md-5">
      <h1>Who, What &amp; Where</h1>
      <ul>
        <li>We're a property service company, whose services include:
          <ul>
            <li>House <?php echo $this->Html->link('Painting', array('controller' => 'services', 'action' => 'house_painting')); ?> &mdash; Interior &amp; Exterior</li>
            <li>Furniture <?php echo $this->Html->link('Assembly', array('controller' => 'services', 'action' => 'furniture_assemblies')); ?> &amp; Installation</li>
            <li>Outdoor Gear <?php echo $this->Html->link('Assembly', array('controller' => 'services', 'action' => 'assemblies')); ?></li>
            <li>Sports Equipment <?php echo $this->Html->link('Assembly', array('controller' => 'services', 'action' => 'furniture_assemblies')); ?></li>
          </ul>
        </li>
        <li>Located in Wheat Ridge, Colorado</li>
        <li>Servicing Downtown and Central Denver, the Denver Metro Area and the Foothills</li>
      </ul>
      <h1>Why You Need Our Services</h1>
      <ul>
        <li>A fresh coat of paint can turn an outdated or drab space into a vibrant room that reflects your current style and personality.</li>
        <li>You are a realtor who is preparing a house for sale and need to clear loan contingencies.</li>
        <li>You are a landlord who is getting your property &ldquo;make-ready&rdquo;.</li>
        <li>You purchased that cool new item online, but maybe you don't have the time, tools, energy or know-how to put it together.</li>
      </ul>
      <h1>Why You Should Hire <u>Us</u></h1>
      <ul>
        <li>We are knowledgeable factotums with years of experience as painters, stagehands and carpenters.</li>
        <li>You may beautify your home with as little impact to the environment as possible.</li>
        <li>We have a proven track record with great <?php echo $this->Html->link('reviews and testimonials', array('controller' => 'testimonials', 'action' => 'index')); ?>.</li>
      </ul>
    </div>
    <div class="recent col col-xs-offset-1 col-xs-10 col-md-4">
      <h1>Recent Reviews</h1>
      <?php foreach ($testimonials as $testimonial): ?>
        <blockquote>
          <div itemprop="review" itemscope itemtype="http://schema.org/Review">
            <span itemprop="description">&ldquo;<?php echo $testimonial['Testimonial']['testimonial']; ?>&rdquo;</span><br><br>
            <span class="author clearfix" itemprop="author"><small><strong><?php echo $testimonial['Testimonial']['name']; ?></strong></small></span><br>
          </div>
        </blockquote>
      <?php endforeach; ?>
      <!--<h1>Recent Blog Posts</h1>
        <?php //foreach ($posts as $post): ?>
          <div class="recent-post">
            <h2><?php //echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h2>
            <p><?php //echo substr($post['Post']['body'], 0, 200); ?>&hellip;
            <?php //echo $this->Html->link('Read more', array('controller' => 'posts', 'action' => 'index')); ?></p>
          </div>
        <?php //endforeach; ?>-->
    </div>
  </div>
</div>