<?php
namespace Admin\Controller;
use Think\Controller;
class BlogController extends Controller{
	public function index(){
		$blog = M('Blog'); // 实例化User对象
    	$count = $blog->where('read_num != 0')->count();// 查询满足要求的总记录数
    	$Page = new \Think\Page($count,3);
    	//实例化分页类 传入总记录数和每页显示的记录数(2)
    	$Page->setConfig('prev','上一页');
    	$Page->setConfig('next','下一页');
    	$Page->setConfig('header',"<span class='rows'>共 %TOTAL_ROW% 博客</span>");
    	$Page->setConfig('theme',"%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%");
    	$show = $Page->show();// 分页显示输出
    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$blog_list = $blog->where('read_num != 0')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$blog_list);// 赋值数据集
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display(); // 输出模板
	}
	public function add(){
		$this->display();
	}
	public function handleAdd(){
		$model = M('Blog');
		$info = uploadFile('pic');
		$pic = $info['pic']['savepath'].$info['pic']['savename'];
		$_POST['pic'] = $pic;
		$_POST['create_time'] = time();
		$model->create();
		$model->add();
		$this->success('上传成功!',U('admin/Blog/index'));  
	}
	 public function update(){
    	$id = I('get.id',0);
    	$blog_info = M('Blog')->where("id = $id")->find();
    	$this->assign('blog',$blog_info);
    	$this->display();
    }
    public function handleUpdate(){
    	$id = I('post.id',0);
    	if($_FILES['pic']['name']){  //判断是否修改了图片，如果添加了肯定name存在
    	    $info = uploadFile('pic');
    	    $pic = $info['pic']['savepath'].$info['pic']['savename'];
			$_POST['pic'] = $pic;
   		}
   		$_POST['update_time'] = time();
   		//var_dump($_POST);die();
   		M('Blog')->create();
    	M('Blog')->where("id = $id")->save();
    	$this->success('修改成功',U('admin/blog/index'));
    }
    public function del(){
    	M('Blog')->where(array('id'=>I('get.id',0)))->delete();//假删除 只是不显示 还在数据库中
    	$this->success('已删除',U('admin/blog/index'));
    }	
}

?>