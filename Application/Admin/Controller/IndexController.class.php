<?php
namespace Admin\Controller;

use Think\Controller;
class indexController extends Controller {
    function index() {
        $breadcrumb=array('控制台');
        $this->assign('breadcrumb',$breadcrumb);
    	$this->assign('page','index:detial');
        $this->display();
    }
}