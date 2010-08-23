<?php
class UsersController extends AppController {

	public $name = 'Users';
    public $components = array('Auth');

    public function beforeFilter(){
        $this->Auth->allow(
                'admin_add'
            );
    }

    /**
     * 管理者の一覧を表示する。
     */
    public function my(){
        $user = $this->Auth->user();
        $this->set('user',$user);
    }

    /**
     * 管理者の一覧を表示する。
     */
    public function index(){
        $users = $this->User->find('all',array('order'=>'User.id asc')) || array();
        $this->set('users',$users);
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

    /**
     * ユーザーの追加画面
     */
    public function admin_add(){
        $data = &$this->data;
        
        //POSTされてたら追加してリダイレクト
        if($data){
            $this->Session->setFlash(
                    $this->User->save($data) ? 
                        '追加しました。':
                        '追加できませんでした。'
                );
            $this->redirect('/admin/users/');
        }
    }
}
?>
