<div class="row">
	<h1>Bid proposal for:</h1>
	<div class="col col-md-offset-1 col-xs-12 col-md-10">
		<strong><?php echo $order['Order']['name']; ?></strong>
	</div>
	<div class="col col-md-offset-1 col-xs-10">
		Client Address: <?php echo $order['Order']['client_address']; ?>
	</div>
	<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
		Product Name: <?php echo $order['Product']['name']; ?>
	</div>
	<?php if($order['Order']['product_id'] == 1) { ?>
		<?php if(!empty($estimate[1])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Living Room: $<?php echo $estimate[1]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[2])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Family Room: $<?php echo $estimate[2]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[3])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Kitchen: $<?php echo $estimate[3]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[4])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Main Bedroom: $<?php echo $estimate[4]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[5])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Bedroom 1: $<?php echo $estimate[5]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[6])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Bedroom 2: $<?php echo $estimate[6]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[7])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Bedroom 3: $<?php echo $estimate[7]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[8])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Bedroom 4: $<?php echo $estimate[8]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[9])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Bathroom 1: $<?php echo $estimate[9]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[10])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Bathroom 2: $<?php echo $estimate[10]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[11])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Bathroom 3: $<?php echo $estimate[11]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[12])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Office: $<?php echo $estimate[12]; ?>
			</div>
		<?php } ?>
	<?php } else if($order['Order']['product_id'] == 2) { ?>
		<?php if(!empty($estimate[1])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Front: $<?php echo $estimate[1]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[2])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Back: $<?php echo $estimate[2]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[3])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Side 1: $<?php echo $estimate[3]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[4])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Side 2: $<?php echo $estimate[4]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[5])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Garage: $<?php echo $estimate[5]; ?>
			</div>
		<?php } ?>
		<?php if(!empty($estimate[6])) { ?>
			<div class="clearfix col col-md-offset-1 col-xs-12 col-md-10">
				Deck: $<?php echo $estimate[6]; ?>
			</div>
		<?php } ?>
	<?php } ?>
	<div class="clearfix col col-xs-offset-1 col-xs-10">
		Bid Total: $<?php echo $estimate[0]; ?>
	</div>
</div>