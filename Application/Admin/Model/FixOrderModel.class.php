<?php
/**
 * Created by PhpStorm.
 * User: STORM
 * Date: 2017/8/10
 * Time: 14:25
 */

namespace Admin\Model;


use Think\Model;

class FixOrderModel extends Model
{
    /**
     * 报修订单列表
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
        //rule？
//        protected $_validate = array(
//            array('title', 'require', '标题不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
//            array('url', 'require', 'URL不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
//        );


        //beforeaction？
        protected $_auto = array(
            array('status', '1', self::MODEL_INSERT),
            array('create_time', NOW_TIME, self::MODEL_INSERT),//场景 self::MODEL_INSERT？
            array('update_time', NOW_TIME, self::MODEL_BOTH),
        );



}//END