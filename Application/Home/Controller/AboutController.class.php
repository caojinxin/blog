<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function about(){
    	$str = file_get_contents('./Public/file/user.txt');
		$arr = unserialize($str);
		$this->assign('list',$arr);
    	$this->display();
    }
}