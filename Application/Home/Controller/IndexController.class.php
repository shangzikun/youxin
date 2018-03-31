<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// $classify = D('Classify');
    	
        $this->display();
    }
     public function verifycode() {
    	$config =    array(
	    'fontSize'    =>    30,    // 验证码字体大小
	    'length'      =>    4,     // 验证码位数
	    'useNoise'    =>    false, // 关闭验证码杂点
	    'fontttf'     =>   '5.ttf',// 验证码字体使用 ThinkPHP/Library/Think/Verify/ttfs/5.ttf
	    'useImgBg'    =>    true,  // 开启验证码背景图片功能 随机使用 ThinkPHP/Library/Think/Verify/bgs 目录下面的图片
		'codeSet'     => '0123456789',// 设置验证码字符为纯数字
	   );
		$Verify = new \Think\Verify($config);
		$Verify->entry();
    }    
}