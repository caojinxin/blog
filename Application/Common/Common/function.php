<?php
	function uploadFile($filename){
		$upload = new \Think\Upload();  // 实例化上传类    
		$upload->maxSize = 3145728 ;   // 设置附件上传大小    
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
		$upload->rootPath = './Public/';
		$upload->savePath = './Uploads/'; // 设置附件上传目录    
		$info = $upload->upload();     // 上传文件 
		//$pic = $info[$filename]['savepath'].$info[$filename]['savename'];
		return $info;
	}


?>