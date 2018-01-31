<?php 
class Review extends AppModel {
    public function getRecentTestimonials() {
    	$reviews = $this->find('all', array(
    		'order' => array('Review.id' => 'desc'),
    		'limit' => 5
    	));
    	return $reviews;
    }
}
?>