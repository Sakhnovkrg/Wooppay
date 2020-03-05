<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCashOutRequestCustom
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $returnURL
     */
    protected $returnURL = null;

    /**
     * @var string $postLink
     */
    protected $postLink = null;

    /**
     * @var string $extID
     */
    protected $extID = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $addParams
     */
    protected $addParams = null;

    /**
     * @param float $amount
     * @param string $returnURL
     * @param string $postLink
     * @param string $extID
     * @param string $phone
     * @param string $addParams
     */
    public function __construct($amount, $returnURL, $postLink, $extID, $phone, $addParams)
    {
      $this->amount = $amount;
      $this->returnURL = $returnURL;
      $this->postLink = $postLink;
      $this->extID = $extID;
      $this->phone = $phone;
      $this->addParams = $addParams;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnURL()
    {
      return $this->returnURL;
    }

    /**
     * @param string $returnURL
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutRequest
     */
    public function setReturnURL($returnURL)
    {
      $this->returnURL = $returnURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostLink()
    {
      return $this->postLink;
    }

    /**
     * @param string $postLink
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutRequest
     */
    public function setPostLink($postLink)
    {
      $this->postLink = $postLink;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtID()
    {
      return $this->extID;
    }

    /**
     * @param string $extID
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutRequest
     */
    public function setExtID($extID)
    {
      $this->extID = $extID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutRequest
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddParams()
    {
      return $this->addParams;
    }

    /**
     * @param string $addParams
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutRequest
     */
    public function setAddParams($addParams)
    {
      $this->addParams = $addParams;
      return $this;
    }

}
