<?php
class videosController extends controller {

    public function index() {
    	$array = array();

    	$videos = new Videos();
    	$array['lista'] = $videos->getLista();
    	
        $this->loadTemplate("videos", $array);
    }

    public function adicionar() {
    	$array = array();

        ...
    	
        $this->loadTemplate("videos_add", $array);
    }

    public function editar($id) {
    	$array = array();

        ...

        $this->loadTemplate("videos_edit", $array);
    }
    
}