<?php
namespace Admin\Controller;
use Think\Controller;
class ClassifyController extends Controller {
    public function lists() {
    	$classifyModel = D('Classify');
    	$data = $classifyModel->getList();
    	// var_dump($data);
    	// die();
    	$this->assign('data',$data);
    	$this->display();
    }
    public function add() {
    	$classifyModel = D('Classify');
    	$classify = $classifyModel->getLists();
    	$this->assign('classify',$classify);
    	$this->display();
    }
    public function doAdd() {
    	$name = I('post.name','');
    	$parent_id = I('post.parent_id',0);
    	$image = uploadFile('image','car_classify_brand');
    	$data = array(
    		'name'      => $name,
    		'parent_id' => $parent_id,
    		'image'     => $image,
    		);
    	$status = D('Classify')->add($data);
    	if($status) {
    		$this->success('添加成功',U('Admin/Classify/lists'));
    	}
    }
    public function edit() {
        $id = I('get.id','');
        $classifyModel = D('Classify');
        $classify = $classifyModel->getLists();
        $data = $ClassifyModel->getInfoById($id);
        $this->assign('classify',$classify);
        $this->assign('data',$data);
        $this->display();
    }
    public function doEdit() {
        $id = I('get.id','');

    }
    public function onLine() {
    	$id = I('get.id','');
    	$classifyModel = D('Classify');
    	$status = $classifyModel->audit($id,1);
    	if($status) {
    		$this->success('上线成功',U('Admin/Classify/lists'));
    	}
    }
    public function offLine() {
    	$id = I('get.id','');
    	$classifyModel = D('Classify');
    	$status = $classifyModel->audit($id,0);
    	if($status) {
    		$this->success('下线成功',U('Admin/Classify/lists'));
    	}
    }

}