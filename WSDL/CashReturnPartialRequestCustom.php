<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashReturnPartialRequestCustom
{

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param int $operationId
     * @param float $amount
     */
    public function __construct($operationId, $amount)
    {
      $this->operationId = $operationId;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashReturnPartialRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashReturnPartialRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
