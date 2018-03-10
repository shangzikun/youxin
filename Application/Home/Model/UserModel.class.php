<?php
namespace Home\Model;
use Think\Model;
class UserModel extends BaseModel {
   public function add($name,$password) {
   		$createtime = date("Y-m-d H:i:s");
   		$data = array('name'=>$name,
			   		  'password'=>$password,
			   		  'createtime'=>$createtime);
		$res = parent::add($data);
		return $res;
   }  
}