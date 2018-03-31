<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller {
	//文章数据获取和展示
    public function Lists(){
      $articleModel = M("users");
       // $article = $articleModel->join('user ON article.authorid = user.id');
      $article = $articleModel->join('article ON users.userid = article.auid');
      $article = $article->select();
      $this->assign("article", $article);
      $this->display();
   }

   public function page(){
        $User = M('article'); 
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
        $orderby['id']='ASC';

        $image = $Model->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign(article,$image);// 赋值数据集
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show= $Page->show();
        $this->assign('page',$show);// 赋值分页输出

        $this->display(); // 输出模板
   }
   //单条删除数据
   public function articleDelete(){
      $id=I('id');
      $Model=M('article');
      $Model->where("aid=$id")->delete();
      $this->redirect("Lists");
    }
    // 批量删除数据
    public function articleBatchDelete() {
      $articleModel = M("article");
      $id = I("id");
      $getId = implode(',', $id);
      $articleModel->delete($getId);
      $this->redirect("Lists");
    }
    //文章详情页
    public function content(){
      $id = I("id");
      $articleModel = M("article");
      $article = $articleModel->join('users ON article.auid = users.userid');
      $article = $article->where("article.aid=$id")->select();
      $this->assign("article", $article);
      $this->display();
    }

}
