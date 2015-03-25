<?php
namespace Admin\Controller;

use Think\Controller;
class setController extends Controller {
    function index() {
	    $navModel=M('navi');
        $where['parent_id']=0;
        $nav=$navModel->where($where)->select();

        $this->assign('nav',$nav);
        $this->display();
    }

    function navlist(){
        session('sanName','导航列表');
        $this->display();
    }

    function dataList(){
        $navModel=M('navi');
        $nav=$navModel->select();
        $this->ajaxReturn($nav);

    }

    function navajax(){
        $navModel=M('navi');
    	$parent_id=intval(I('post.parent_id'));
	    $condition="parent_id=$parent_id";
        $list=$navModel->where($condition)->select();
        if (!$list) {
            $list=array();
        }
        $this->ajaxReturn($list);
    }
}