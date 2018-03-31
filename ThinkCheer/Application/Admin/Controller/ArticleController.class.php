<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller {
	//文章数据获取和展示
    public function Lists(){
      $articleModel = M("users");
       // $article = $articleModel->join('user ON article.authorid = user.id');
      $article = $articleModel->join('article ON users.userid = article.aid');
      $article = $article->select();
      $this->assign("article", $article);
      $this->display();
   }

}
