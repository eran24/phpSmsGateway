<?php
/**
 * Created by PhpStorm.
 * User: sonaa
 * Date: 4/4/17
 * Time: 5:13 PM
 */

namespace Ashrafi\SMSGateway\Gateways;



use Ashrafi\SMSGateway\AbstractConfig;

class KavenegarConfig extends AbstractConfig
{
    protected $defaultHandler=Kavenegar::class;
    protected $apiKey=null;
    protected $baseUrl='http://api.kavenegar.com/v1/';
    protected $lookupTemplate = 'verify';
    protected $lookupType;

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     * @return KavenegarConfig
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }


    /**
     * @return null
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param null $apiKey
     * @return KavenegarConfig
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    function getHandler()
    {
        return $this->handler ? $this->handler : $this->defaultHandler;
    }

    function getConfigs()
    {
        return $this->configs;
    }

    /**
     * @param $from
     * @return $this
     */
    function setFrom($from){
        $this->from=$from;
        return $this;
    }

    function getFrom()
    {
        return $this->from;
    }



    public function setLookupType($type)
    {
        $this->lookupType = $type;
        return $this;
    }


    public function getLookupType()
    {
        return $this->lookupType;
    }


    public function setLookupTemplate($template)
    {
        $this->lookupTemplate = $template;
        return $this;
    }


    public function getLookupTemplate()
    {
        return $this->lookupTemplate;
    }



}