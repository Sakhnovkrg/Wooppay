<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetServiceFieldsRequest
{

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
     * @param string $service
     * @param string $merchant
     * @param string $fields
     */
    public function __construct($service, $merchant, $fields)
    {
      $this->service = $service;
      $this->merchant = $merchant;
      $this->fields = $fields;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

}
