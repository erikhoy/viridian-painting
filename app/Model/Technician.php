<?php 
class Technician extends AppModel {
	public $hasAndBelongsToMany = array('Order');
}
?>