<?php
class SuperUsersController extends AppController {

	public $name = 'SuperUsers';
    public $component = array('Auth');

    /**
     * 管理者の一覧を表示する。
     */
    public function admin_index(){
        $super_users = $this->SuperUser->find('all',array('order'=>'SuperUser.id asc')) or array();
        $this->set('users',$super_users);
    }
}
?>
