<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashPrepaidCardRequestCustom
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var CashPrepaidCardRequestData $billingInfo
     */
    protected $billingInfo = null;

    /**
     * @param float $amount
     * @param string $login
     * @param CashPrepaidCardRequestData $billingInfo
     */
    public function __construct($amount, $login, $billingInfo)
    {
      $this->amount = $amount;
      $this->login = $login;
      $this->billingInfo = $billingInfo;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardRequest
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return CashPrepaidCardRequestData
     */
    public function getBillingInfo()
    {
      return $this->billingInfo;
    }

    /**
     * @param CashPrepaidCardRequestData $billingInfo
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardRequest
     */
    public function setBillingInfo($billingInfo)
    {
      $this->billingInfo = $billingInfo;
      return $this;
    }

}
