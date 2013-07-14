<?php 
/*
 * @author Taixing Lin <olinlinlino@gmail.com>
 * @version 1.0 
 * @subpackage RegisterModel.php
*/
class RegisterModel extends Model {
    function InsertRegisterInfo($uid,$status){
        $data = [
            'uid' => $uid,
            'time'=> time(),
            'status'=> $status
        ];
        M('Register')->data($data)->add();
    }
}
?>
