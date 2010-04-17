<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $helpers = array('Html','Javascript');
    public $uses = array();

    public function index(){
        $this->set("title_for_layout","");
    }
}
?>
