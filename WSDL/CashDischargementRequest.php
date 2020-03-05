<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashDischargementRequest
{

    /**
     * @var string $subjectFrom
     */
    protected $subjectFrom = null;

    /**
     * @var int $accountFrom
     */
    protected $accountFrom = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param string $subjectFrom
     * @param int $accountFrom
     * @param float $amount
     */
    public function __construct($subjectFrom, $accountFrom, $amount)
    {
      $this->subjectFrom = $subjectFrom;
      $this->accountFrom = $accountFrom;
      $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getSubjectFrom()
    {
      return $this->subjectFrom;
    }

    /**
     * @param string $subjectFrom
     * @return \Sakhnovkrg\Wooppay\WSDL\CashDischargementRequest
     */
    public function setSubjectFrom($subjectFrom)
    {
      $this->subjectFrom = $subjectFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountFrom()
    {
      return $this->accountFrom;
    }

    /**
     * @param int $accountFrom
     * @return \Sakhnovkrg\Wooppay\WSDL\CashDischargementRequest
     */
    public function setAccountFrom($accountFrom)
    {
      $this->accountFrom = $accountFrom;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashDischargementRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
