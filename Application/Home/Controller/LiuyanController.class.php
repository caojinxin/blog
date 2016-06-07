<?php
namespace Home\Controller;
use Think\Controller;
class LiuyanController extends Controller{
	public function liuyan(){
		if($_POST){
			$_POST['user_id'] = 0;
			$_POST['create_time'] = time();
			M('Comment')->create();
			M('Comment')->add();
		}
		$comment_list = M('Comment')->select();
		$comment_part = M('Comment')->order('top desc')->limit('3')->select();
		$num = M('Comment')->count();
		$this->assign('num',$num);
		$this->assign('list',$comment_list);
		$this->assign('list1',$comment_part);
		$this->display();
	}
	public function huifu(){
		$_POST['user_id'] = 1;
		$blog_id = I('post.blog_id');
		$_POST['blog_id'] = $blog_id;
		$_POST['create_time'] = time();
		M('Comment')->create();
		M('Comment')->add();
		$this->success('评论成功',U('home/study/detail',array('id'=>$blog_id)));
	}
	public function top(){
		$num = $_POST['num'];
		$num++;
		$arr = array('status'=>1,'top'=>$num);
		$data['top'] = $num;
		M('Comment')->data($data)->where('user_id = 0')->save();
		echo json_encode($arr);
	}
}

?>