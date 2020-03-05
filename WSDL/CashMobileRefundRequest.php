<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashMobileRefundRequest
{

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @var boolean $force
     */
    protected $force = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param int $operationId
     * @param boolean $force
     * @param float $amount
     */
    public function __construct($operationId, $force, $amount)
    {
      $this->operationId = $operationId;
      $this->force = $force;
      $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getOperationId()
    {
      return $this->operationId;
    }

    /**
     * @param int $operationId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashMobileRefundRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForce()
    {
      return $this->force;
    }

    /**
     * @param boolean $force
     * @return \Sakhnovkrg\Wooppay\WSDL\CashMobileRefundRequest
     */
    public function setForce($force)
    {
      $this->force = $force;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashMobileRefundRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
