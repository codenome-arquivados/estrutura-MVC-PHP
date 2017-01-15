<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$array = array();
     	$this->loadTemplate("home", $array);
    }

}