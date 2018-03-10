<?php
namespace Admin\Model;
use Think\Model;
class ClassifyModel extends BaseModel {
	protected $tableName = "car_classify_brand";
	public function getLists($parent_id=0) {
		$data = $this->where(array('parent_id'=>$parent_id))->select();
		return $data;
	}
	public function getClassifyLists($parent_id=0) {
		$data = $this->where("parent_id={$parent_id}")->select();
		foreach ($data as $key => $value) {
			$child = $this->where("parent_id={$value['id']}")->select();
			$data[$key]['child'] = $child;
		}
		return $data;
	}
	public function audit($id,$status=0) {
		$data = array(
			'status' => $status,
			);
		$res = $this->where("id={$id}")->save($data);
		return $res;
	}
}