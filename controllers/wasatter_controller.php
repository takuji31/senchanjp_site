<?php
class WasatterController extends AppController {

	public $name = 'Wasatter';
    public $menu = true;
    public $uses = array();
    public $helpers = array("Html","Form","Javascript");
    public function index(){
        
    }
    
    public function callback(){
        $token = @$this->params['url']['token'];
        print $token;
        exit;
    }
}
?>
