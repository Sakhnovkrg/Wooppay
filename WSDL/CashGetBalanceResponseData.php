<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetBalanceResponseData
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param float $amount
     */
    public function __construct($amount)
    {
      $this->amount = $amount;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetBalanceResponseData
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
