<?php 
class Testimonial extends AppModel {
    public function getRecentTestimonials() {
    	$testimonials = $this->find('all', array(
    		'order' => array('Testimonial.id' => 'desc'),
    		'limit' => 5
    	));
    	return $testimonials;
    }
}
?>