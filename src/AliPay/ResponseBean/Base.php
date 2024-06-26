<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2019-02-15
 * Time: 19:23
 */

namespace EasySwoole\Pay\AliPay\ResponseBean;


use EasySwoole\Spl\SplBean;

class Base extends SplBean
{
    protected $app_id;
    protected $version;
    protected $format;
    protected $sign_type;
    protected $timestamp;
    protected $return_url;
    protected $notify_url;
    protected $charset;
    protected $app_auth_token;
    protected $biz_content;
    protected $sign;
    protected $out_trade_no;
    protected $total_amount;
    protected $subject;
    protected $timeout_express;
    protected $product_code;
    protected $method;
    protected $body;
    protected $app_cert_sn;
    protected $alipay_root_cert_sn;

    public function toArray(int|callable $filter = null): array
    {
        return parent::toArray($filter);
    }
}
