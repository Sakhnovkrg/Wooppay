<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetServiceFieldsExtendedRequest
{

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var string $merchant
     */
    protected $merchant = null;

    /**
     * @var string $fields
     */
    protected $fields = null;

    /**
     * @param string $language
     * @param string $service
     * @param string $merchant
     * @param string $fields
     */
    public function __construct($language, $service, $merchant, $fields)
    {
      $this->language = $language;
      $this->service = $service;
      $this->merchant = $merchant;
      $this->fields = $fields;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsExtendedRequest
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsExtendedRequest
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchant()
    {
      return $this->merchant;
    }

    /**
     * @param string $merchant
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsExtendedRequest
     */
    public function setMerchant($merchant)
    {
      $this->merchant = $merchant;
      return $this;
    }

    /**
     * @return string
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param string $fields
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsExtendedRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

}
