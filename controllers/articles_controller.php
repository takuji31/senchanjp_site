<?php
class ArticlesController extends AppController {

	public $name = 'Articles';
    public $helpers = array('Session','Form','Html','Javascript');
    public $components = array('Wassr');

	public function index() {
        $articles = $this->Article->find('all',array('order'=>'Article.id desc')) or array();
        $this->set('articles',$articles);
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

    public function admin_gps_test() {
        $this->Wassr->setUserId('senchan_test');
        $this->Wassr->setPassword('takuji');
        $res = $this->Wassr->update_gps('GPSテスト','35.36.22.054','139.41.58.042','wgs84');
        $this->Session->setFlash($res);
        $this->redirect('/admin/articles/');
    }
}
