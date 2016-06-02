<?php
namespace Admin\Controller;
use Think\Controller;
class CategroyController extends Controller{
	public function index(){
		$where['id'] = array('gt',0);
		$list = M('Categroy')->where($where)->select();
		$this->assign('list',$list);
		$this->display();
	}
	public function add(){
		$list = M('Categroy')->where('parent_id = 0')->select();
		$this->assign('list',$list);
		$this->display();
	}
	public function handleAdd(){
		M('Categroy')->create();
		M('Categroy')->add(); 
		$this->success('增加成功',U('admin/categroy/index'));
	}
	public function update(){
		$id = I('get.id');
		$categroy_info = M('Categroy')->where("id = $id")->find();
		$this->assign('categroy',$categroy_info);
		$list = M('Categroy')->where("parent_id = 0")->select();
		$this->assign('list',$list);
		$this->display();
	}
	public function handleUpdate(){
		$id = I('post.id');
		M('Categroy')->create();
		M('Categroy')->where("id = $id")->save();
		$this->success('修改成功',U('admin/categroy/index'));
	}
	public function del(){
		$id = I('get.id');
		M('Categroy')->where("id = $id")->delete();
		$this->success('删除成功',U('admin/categroy/index'));
	}
}


?>