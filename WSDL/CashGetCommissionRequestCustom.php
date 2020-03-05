<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetCommissionRequestCustom
{

    /**
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param int $serviceId
     * @param float $amount
     */
    public function __construct($serviceId, $amount)
    {
      $this->serviceId = $serviceId;
      $this->amount = $amount;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetCommissionRequest
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetCommissionRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
