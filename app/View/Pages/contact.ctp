<div class="row">
  <div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
    <h1>Contact Us</h1>
  </div>
  <div class="contact col col-xs-offset-1 col-xs-10">
    <?php 
      echo $this->Form->create('Contact');
      echo $this->Form->input('name', array('label' => 'Your Name', 'placeholder' => 'First & Last Name'));
      echo $this->Form->input('email', array('label' => 'Your Email', 'type' => 'email', 'placeholder' => 'example@domain.com'));
      echo $this->Form->input('body', array('label' => 'Message', 'type' => 'textarea', 'placeholder' => 'Message'));
      echo $this->Form->button('Submit', array('class' => 'btn btn-default'));
      echo $this->Form->end();
    ?>
    <!--  <form class="form-horizontal" role="form" method="post" action="contact.php">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="<?php //echo htmlspecialchars($_POST['name']); ?>">
            <?php //echo "<p class='text-danger'>$errName</p>";?>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Your Email</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php //echo htmlspecialchars($_POST['email']); ?>">
            <?php //echo "<p class='text-danger'>$errEmail</p>";?>
          </div>
        </div>
        <div class="form-group">
          <label for="message" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-6">
            <textarea class="form-control" rows="4" name="message"><?php //echo htmlspecialchars($_POST['message']);?></textarea>
            <?php //echo "<p class='text-danger'>$errMessage</p>";?>
          </div>
        </div>
        <div class="form-group">
          <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php //echo "<p class='text-danger'>$errHuman</p>";?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-7 col-sm-offset-1">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <?php //echo $result; ?>  
          </div>
        </div>
      </form>
    </div>-->
  </div><!-- /.container -->
</div>