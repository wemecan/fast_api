<?php
/**
 * Created by PhpStorm.
 * User: lzqqdy
 * Date: 2019/7/25
 * Time: 8:45
 */

namespace app\api\validate;


class Payment extends Base
{
    /**
     * 验证规则
     */
    protected $rule = [
        'scene|场景值'     => 'require|in:order',
        'order_sn|订单编号' => 'require|number|length:16',
    ];
    /**
     * 提示消息
     */
    protected $message = [
    ];
}