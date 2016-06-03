<?php
namespace Admin\Controller;
use Think\Controller;
class AboutController extends Controller{
	public function index(){
		$str = file_get_contents('./Public/file/user.txt');
		$arr = unserialize($str);
		//var_dump($arr);die();
	}
	public function update(){
		$this->display();
	}
	public function handleUpdate(){
		$fp = fopen('./Public/file/user.txt','a+');
		$str = serialize($_POST);
		fwrite($fp,$str);
		fclose($fp);
		$this->success('显示',U('admin/about/index'));
	}

}

?>