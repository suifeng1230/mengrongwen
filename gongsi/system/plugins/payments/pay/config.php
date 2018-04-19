<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/17
 * Time: 16:34
 */

return [
    'adminEmail' => 'admin@example.com',
    'admin_img'=>'http://www.admin.com',


//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
    'transport'    => 'http',
    'alipay_config'=>[
        'partner' =>'2088121321528708',//必填
        'key'=>'egeyug5odrd71c9aox7wry2czcer6zdj',//必填
        'sign_type'=>'MD5',//必填
        'input_charset'=> strtolower('utf-8'),//必填
        'cacert'=>getcwd().'/cacert.pem',//必填且CA证书文件能有效访问，否则会有sign错误
        'transport'=>'http',//如果你的服务器支持https请填写https
    ],
    'alipay'   =>[
        'seller_email'=>'609006078@qq.com',//必填
        'notify_url'=>'http://www.gongsi.com/index.php?r=pay/notifyUrl',
        'return_url'=>'http://www.gongsi.com/index.php?',//必填
        'successpage'=>'pay/success',//处理成功后的页面
        'errorpage'=>'pay/file',//处理失败的页面
    ],

    'app'=>[
        'key'=>'29120',
        'sign'=>'6e530103364c78f52c646266254b3d38'
    ]
];