<?php


namespace EasySwoole\Pay\WeChat\WeChatPay;


use EasySwoole\Pay\WeChat\RequestBean\Base;
use EasySwoole\Pay\WeChat\ResponseBean\MicroPay as MicroPayResponse;

class MicroPay
{
    protected function requestPath(): string
    {
        return '/pay/micropay';
    }
    function pay(Base $bean)
    {
        $bean->setNotifyUrl( $this->config->getNotifyUrl() );
        $utility      = new Utility( $this->config );
        $result       = $utility->requestApi( $this->requestPath(), $bean );
        return new MicroPayResponse($result->getArrayCopy());
    }
}