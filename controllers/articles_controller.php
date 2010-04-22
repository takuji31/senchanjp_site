<?php
class ArticlesController extends AppController {

	public $name = 'Articles';
    public $helpers = array('Session','Form','Html','Javascript');

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
                $this->Session->setFlash('投稿しました。');
            }else{
                $this->Session->setFlash('投稿できませんでした。');
            }
            $this->redirect('/admin/articles/');
        }
    }
}
