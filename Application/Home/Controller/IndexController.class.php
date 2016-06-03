<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public $detail_url = array(
		1 => array('controller'=>'Manlife','method'=>'detail'),
		5 => array('controller'=>'Study','method'=>'detail'),
		);
    public function index(){
    	$blog = M('Blog'); // 实例化User对象
    
    	$count = $blog->where($where)->count();// 查询满足要求的总记录数
    	$Page = new \Think\Page($count,3);
    	//实例化分页类 传入总记录数和每页显示的记录数(2)
    	$Page->setConfig('prev','<<');
    	$Page->setConfig('next','>>');
    	$Page->setConfig('header',"<span class='rows'>共 %TOTAL_ROW% 博客</span>");
    	$Page->setConfig('theme',"%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%");
    	$show = $Page->show();// 分页显示输出
    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$blog_list = $blog->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list = $blog->order('create_time desc')->select();
        $this->assign('info',$list);
    	$this->assign('detail_url',$this->detail_url);
    	$this->assign('list',$blog_list);
    	$this->assign('page',$show);
    	$this->display();
    }
}



?>

