<?php
class WasatterController extends AppController {

	public $name = 'Wasatter';
    public $menu = true;
    public $uses = array();
    public $helpers = array("Html","Form","Javascript");
    public function index(){
        
    }
    public function download(){

    }
    public function support(){

    }
    public function manual(){

    }
    
    public function callback($platform){
        $this->redirect("wasatter://oauth/$platform");
    }
}
?>
