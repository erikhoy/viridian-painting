<?php 
class Earning extends AppModel {
    public $belongsTo = array('Order', 'User');
}
?>