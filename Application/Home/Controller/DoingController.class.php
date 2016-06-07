<?php
namespace Home\Controller;
use Think\Controller;
class DoingController extends Controller{
	public function index(){
		

		$doing = M('doing'); // 实例化User对象
        $count      = $doing->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        /*$Page->setConfig('prev',"上一页");
        $Page->setConfig('next','下一页');*/
        $Page->setConfig('header','<span class="rows">共 %TOTAL_ROW% 篇文章</span>');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%%HEADER%');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        //$list = $doing->select();
        $list = $doing->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
        $this->assign('page',$show);
		$this->display();
	}
}






?>