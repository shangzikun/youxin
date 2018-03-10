<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class BaseModel extends RelationModel {
	public function getList($offset=0,$limit=20,$order='id desc',$where='1') {
		$data = $this->where("{$where}")->order("{$order}")->limit("{$offset},{$limit}")->select();
		return $data;
	}
	public function getInfoById($id) {
		$info = $this->where(array('id'=>$id))->find();
		return $info;
	}
	public function getInfoByName($name) {
		$info = $this->where(array('name'=>$name))->find();
		return $info;
	}
	public function getInfoByEmail($email) {
		$data = $this->where("email = '{$email}'")->find();
		return isset($data) ? $data :array();
	}
	public function getCount($where) {
		$data =$this->where("{$where}")->count();
		return isset($data[0]) ? $data[0] : 0;
	}
}