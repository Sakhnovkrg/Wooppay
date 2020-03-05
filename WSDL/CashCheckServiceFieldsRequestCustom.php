<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCheckServiceFieldsRequestCustom
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
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @var string $fields
     */
    protected $fields = null;

    /**
     * @param string $service
     * @param string $merchant
     * @param int $serviceId
     * @param string $fields
     */
    public function __construct($service, $merchant, $serviceId, $fields)
    {
      $this->service = $service;
      $this->merchant = $merchant;
      $this->serviceId = $serviceId;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCheckServiceFieldsRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCheckServiceFieldsRequest
     */
    public function setMerchant($merchant)
    {
      $this->merchant = $merchant;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
      return $this->serviceId;
    }

    /**
     * @param int $serviceId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCheckServiceFieldsRequest
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCheckServiceFieldsRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

}
