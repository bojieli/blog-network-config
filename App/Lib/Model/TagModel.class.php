<?php 
/*
 * @author Taixing Lin <olinlinlino@gmail.com>
 * @version 1.0 
 * @subpackage TagModel.php
*/
class TagModel extends Model {
   function addTag($tid,$type){
        global $_G;
        $uid = $_G['uid'];
        $data = [
         'uid' => $uid,
         'tid' => $tid,
         'type'=> $type,
         'time'=> time()
        ];
        M('Tag')->data($data)->add();
   }
   function removeTag($tid){
        global $_G;
        $uid = $_G['uid'];
        M('Tag')->where(['tid'=>$tid,'uid'=>$uid])->delete();
   }
   function getInfoBytid($tid){
          return M('Tag')->where(['tid'=>$tid])->select();
   }
   
}
?>
