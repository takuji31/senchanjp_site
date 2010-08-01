<?php
class UsersController extends AppController {

	public $name = 'Users';
    public $component = array('Auth');

    /**
     * 管理者の一覧を表示する。
     */
    public function index(){
        $users = $this->User->find('all',array('order'=>'User.id asc')) || array();
        $this->set('users',$super_users);
    }

    public function login(){

    }
    public function admin_login(){

    }

    public function logout(){
        $this->Auth->logout();
    }
    public function admin_logout(){
        $this->Auth->logout();
    }
}
?>
