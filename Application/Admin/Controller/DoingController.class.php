<?php
namespace Admin\Controller;
use Think\Controller;
class DoingController extends Controller {
    public function index(){
        $doing = M('doing'); // 实例化User对象
        $count      = $doing->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('prev',"上一页");
        $Page->setConfig('next','下一页');
        $Page->setConfig('header','<span class="rows">共 %TOTAL_ROW% 篇文章</span>');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%%HEADER%');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $doing->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
    	$this->display();    
    }
    public function add(){
        $this->display();
    }
    public function handleadd(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      'public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =      ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            foreach($info as $file){
            $pic = $info['pic']['savepath'].$info['pic']['savename'];
            }
        }

        $_POST['pic'] = $pic;
        $content = $_POST['content'];
        $_POST['create_time'] = time();
        M('doing')->create();
        M('doing')->add();
        $this->success('新增成功',U('admin/doing/index'));
    }
    public function update(){
        $id = I('get.id',0);
        $doing_info = M('doing')->where("id = $id")->find();
        $this->assign('doing_info',$doing_info);
        $this->display();
    }
    public function handleupdate(){
        if ($_FILES['pic']['name']) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =      'public/Uploads/'; // 设置附件上传根目录
            $upload->savePath  =      ''; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                foreach($info as $file){
                $pic = $info['pic']['savepath'].$info['pic']['savename'];
                }
            }

            $_POST['pic'] = $pic;
        }
            
        $id = $_POST['id'];
        $content = $_POST['content'];
        $_POST['update_time'] = time();
        M('doing')->create();
        M('doing')->where("id = $id")->save();
        $this->success('更新成功',U('admin/doing/index'));
    }
    public function delete(){
        $id = I('get.id',0);
        M('doing')->where("id = $id")->delete();
        $this->success('删除成功',U('admin/doing/index'));
    }
}