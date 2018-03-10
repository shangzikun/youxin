<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        $this->display();
    }
    public function doLogin(){
    	$name = I('post.name','');
    	$password = I('post.password','');
    	$verifyCode = I('post.verify','');
    	$userModel = D('User');
    	$userInfo = $userModel->getInfoByName($name);
    	if(empty($name) || empty($password) ||  empty($verifyCode)) {
    		$this->error('用户名或密码为空,登录失败',U('Home/User/login'));
    	}
    	$res = check_verify($verifyCode,'');
       	if (!$res) {
       		$this->error('验证码错误，登录不成功',U('Home/User/login'));	
       	}
		if ($userInfo['password'] == $password) {
			unset($userInfo['password']); //一般来说 密码对外开放
			$_SESSION['me'] = $userInfo;
			$this->success('登陆成功',U('Home/index/index'));
		} else {
			$this->error('用户名或密码错误,登录失败',U('Home/User/login'));
		}

    }
    public function reg() {
    	$this->display();
    }
    public function doReg() {
    	$name = I('post.name','');
    	$password = I('post.password','');
    	$verifyCode = I('post.verify','');
    	if (empty($name) || empty($password) ) {
				$this->error('用户名或密码为空,注册失败',U('Home/User/reg'));
			}
		$res = check_verify($verifyCode,'');
       	if (!$res) {
       		$this->error('验证码错误，注册不成功',U('Home/User/reg'));	
       	}
			$userModel = D('User');
			$userInfo = $userModel->getInfoByName($name);
			if (!empty($userInfo)) {
				$this->error('用户名已存在,注册失败',U('Home/User/reg'));
			}
			$status = $userModel->add($name,$password);
			if ($status) {
				$this->success('注册成功',U('Home/User/login'));
			} else {
				$this->error('参数错误',U('Home/User/login'));
			}
    }
    public function logout () {
			unset($_SESSION['me']);
			$this->success('注销成功',U('Home/index/index'));
	}
	public function userInfo() {
		$this->display();
	}
	public function verifyCode() {
			header("Content-Type:image/png");

			$img = imagecreate(50, 25);

			$back = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);

			$red = imagecolorallocate($img, 255, 0, 0);


			$str = getRandom(4) ;
			$_SESSION['verifyCode'] = $str;
			imagestring($img, 5, 7, 5, $str, $red);

			imagepng($img);

			imagedestroy($img);
		}	

}