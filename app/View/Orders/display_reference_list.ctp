<div class="row">
    <div class="page-heading col col-xs-offset-1 col-xs-10 col-md-6">
        <h1>Claiming a Job</h1>
    </div>
</div>
<div class="row">
    <div class="orders col col-md-offset-1 col-xs-12 col-md-10">
        <ol>
            <div class="col col-xs-6">
                <li>Check our availability on <?php echo $this->Html->link('Google Calendar', 'https://calendar.google.com/calendar/render?cid=fj9nih9uqrh6or7v84pklhh8is%40group.calendar.google.com#main_7', array('target' => '_blank')); ?> to make sure we are available for the window on the day in question.</li>
                <li>If the product is a piece of furniture, check the brand name. If it is made by Sauder, do not claim the job.</li>
                <li>Check the following list of cities to ensure we cover that area:<br>
                    <h2>Cities</h2>
                    <?php foreach ($cities as $city): ?>
                        <?php echo $city; ?><br>
                    <?php endforeach; ?></li>
            </div>
            <div class="col col-xs-6">
                <li>Check the following list to ensure we offer that service:<br>
                    <h2>Services</h2>
                    <?php foreach ($services as $service): ?>
                        <?php $serviceArray = array("playset assembly", "child changing table installation", "portable basketball hoop assembly", "radon drop", "radon pick up"); ?>
                        <?php if (!in_array($service, $serviceArray)) { ?>
                            <?php echo $service; ?><br>
                        <?php } ?>
                    <?php endforeach; ?>
                </li>
            </div>
        </ol>
    </div>
</div>