<?php 
/*
 * @author Taixing Lin <olinlinlino@gmail.com>
 * @version 1.0 
 * @subpackage ContentModel.class.php
*/
class ContentModel extends Model {
    function getInfoByUid($uid){
        return M('Content')->where(['uid'=>$uid])->select();
    }
    function getInfoByCid($cid){
        return M('Content')->where(['cid'=>$cid])->find();
    }
    function getUidByCid($cid){
        return M('Content')->field('uid')->where(['cid'=>$cid])->find()['uid'];
    }
}
?>
