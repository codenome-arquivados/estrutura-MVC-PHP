<?php
class usuariosController extends controller {

    public function index() {
    	$array = array();

    	$usuarios = new Usuarios();
    	$array['lista'] = $usuarios->getLista();
    	
        $this->loadTemplate("usuarios", $array);
    }

    public function adicionar() {
    	$array = array();

    	...
    	
        $this->loadTemplate("usuarios_add", $array);
    }

    public function editar($id) {
    	$array = array();

    	...

        $this->loadTemplate("usuarios_edit", $array);
    }

}