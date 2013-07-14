<?php

class IndexAction extends Action {
    public function index(){   
    }
    public function register(){
	    global $_G;
	    if (empty($_G['uid'])) {
            $this->assign('jumpUrl', '/');
            $this->assign('waitSecond', 1);
            $this->error("您尚未登录请先登录");
        }
        $uid = $_G['uid'];
        if(D('Register')->InsertRegisterInfo($uid,'normal'))
            $this->success('恭喜你，报名成功！');
    }
    public function addTag(){
        $cid = $this->_get('cid');
        $type = $this->_get('type');
        D('Tag')->addTag($cid,$type);
        $this->success('添加成功');
    }
    public function delTag(){
        $cid = $this->_get('cid');
        D('Tag')->removeTag($cid);
        $this->success('去除投票');
    }
}
?>
