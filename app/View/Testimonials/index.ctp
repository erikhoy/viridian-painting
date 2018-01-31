<div class="row">
    <div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
        <h1>Testimonials</h1>
    </div>
    <div class="cta col col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-4">
        <?php echo $this->Html->link('Contact Us Today for a Free Quote!', array('controller' => 'pages', 'action' => 'contact'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
    </div>
    <div class="testimonials col col-xs-offset-1 col-xs-10" style="float: left;">
        <!--<p>Some kind words from some previous clients:</p>-->
        <?php foreach($testimonials as $testimonial): ?>
            <blockquote>
                <div itemprop="review" itemscope itemtype="http://schema.org/Review">
                    <span itemprop="description">&ldquo;<?php echo $testimonial['Testimonial']['testimonial']; ?>&rdquo;</span>
                    <br>
                    <span itemprop="author"><small><?php echo $testimonial['Testimonial']['name']; ?></small></span>
                </div>
            </blockquote>
        <?php endforeach; ?>
  	</div>
</div>