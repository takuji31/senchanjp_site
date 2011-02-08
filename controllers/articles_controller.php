<?php
class ArticlesController extends AppController {

	public $name = 'Articles';
    public $helpers = array('Session','Form','Html','Javascript');
    public $components = array('Senchan.Wassr','Auth');

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow(
            'index',
            'show'
            );
    }

	public function index() {
        //$articles = $this->Article->find('all',array('order'=>'Article.id desc')) or array();
        //$this->set('articles',$articles);
	}
    
    /**
     * ブログ記事の一覧
     */
	public function admin_index() {
        $articles = $this->Article->find('all',array('order'=>'Article.id desc')) or array();
        $this->set('articles',$articles);
    }
    /**
     * ブログ記事の追加
     */
	public function admin_add() {
        //POSTされたらデータ投稿する。
        if(!empty($this->data)){
            $m = &$this->Article;
            $m->set($this->data);
            if($m->save()){
                $this->Wassr->setUserId('senchan_test');
                $this->Wassr->setPassword('takuji');
                $this->Wassr->update('Blog updated! (test)');
                $this->Session->setFlash('投稿しました。');
            }else{
                $this->Session->setFlash('投稿できませんでした。');
            }
            $this->redirect('/admin/articles/');
            exit;
        }
    }
}
