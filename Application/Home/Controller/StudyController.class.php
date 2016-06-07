<?php
namespace Home\Controller;
use Think\Controller;
class StudyController extends Controller {
    public function study(){
    	$blog = M('Blog'); // 实例化User对象
    	$where['parent_id'] = 5; 
    	
    	if(I('get.categroy_id')){
    		$where['categroy_id'] = I('get.categroy_id');
    	}
    	$count = $blog->where($where)->count();// 查询满足要求的总记录数
    	$Page = new \Think\Page($count,2);
    	//实例化分页类 传入总记录数和每页显示的记录数(2)
    	$Page->setConfig('prev','<<');
    	$Page->setConfig('next','>>');
    	$Page->setConfig('header',"<span class='rows'>共 %TOTAL_ROW% 博客</span>");
    	$Page->setConfig('theme',"%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%");
    	$show = $Page->show();// 分页显示输出
    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$blog_list = $blog->where($where)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$categroy_list = M('Categroy')->select();
    	foreach($categroy_list as $v){
    		$categroy[$v['id']] = $v; //变成二维 的key 是 id的值
    	}
        //var_dump($categroy);die();
        if($categroy_id = I('get.categroy_id')){  //重点
            $bar['name']= $categroy[$categroy_id]['name'];
            $bar['url'] = U('home/study/study',array('categroy_id'=>$categroy_id));
        }else{
            $bar['name'] = $categroy[5]['name'];
            $bar['url'] = U('home/study/study',array(''));
        }

        $blog_info = $blog->where('parent_id = 5')->order('create_time asc')->select();
        $blog_info1 = $blog->where('parent_id = 5')->order('read_num desc')->select();
        $this->assign('bar',$bar); //导航条
        $this->assign('info',$blog_info);//排行榜
        $this->assign('info1',$blog_info1);//点击量
    	$this->assign('categroy',$categroy);//categroy表
    	$this->assign('list',$blog_list);//按条件查询的博客
    	$this->assign('page',$show); // 分页显示
    	$this->display();
    }
    public function detail(){
        $id = I('get.id');
        M('Blog')->where("id = $id")->setInc('read_num');
        $blog_list = M('Blog')->where("id = $id")->find();
       
        $categroy_id = $blog_list['categroy_id'];
        //echo $categroy_id;die();
        $where['categroy_id'] = $categroy_id;
        $where['id'] = array('lt',$id);
        $blog_list1 = M('Blog')->where($where)->order('id desc')->limit('1')->find();

        $date['categroy_id'] = $categroy_id;
        $date['id'] = array('gt',$id);
        $blog_list2 = M('Blog')->where($date)->order('id asc')->limit('1')->find();
       
        //var_dump($blog_list2);die();
        $categroy_id = $blog_list['categroy_id'];
        $categroy_list = M('Categroy')->where("id = $categroy_id")->find();

        $categroy_all = M('Categroy')->where('parent_id = 5')->select();
        foreach($categroy_all as $v){
            $categroy[$v['id']] = $v; //变成二维 的key 是 id的值
        }
        $blog_list3 = M('Blog')->where("categroy_id =  $categroy_id")->order('create_time asc')->select();
        $blog_list4 = M('Blog')->where("categroy_id =  $categroy_id")->order('read_num asc')->select();

        
        $comment_list = M('Comment')->where("blog_id = $id")->select();
        //var_dump($comment_list);die();
        $comment_part = M('Comment')->where("blog_id = $id")->order('top desc')->limit('3')->select();
        $this->assign('list8',$comment_list);
        $this->assign('list9',$comment_part);
        $num = M('Comment')->where("blog_id = $id")->count();

        $this->assign('num',$num); 
        $this->assign('list7',$categroy);
        $this->assign('list',$blog_list);
        $this->assign('list1',$categroy_list);
        $this->assign('list2',$blog);
        $this->assign('list3',$blog_list1);
        $this->assign('list4',$blog_list2);
        $this->assign('list5',$blog_list3);
        $this->assign('list6',$blog_list4);
        $this->display();
    }
    public function top(){
        $num = $_POST['num'];
        $blog_id = $_POST['id'];
        $num++;
        $arr = array('status'=>1,'top'=>$num);
        $data['top'] = $num;
        M('Comment')->data($data)->where("blog_id = $blog_id")->save();
        echo json_encode($arr);
    }
}

?>