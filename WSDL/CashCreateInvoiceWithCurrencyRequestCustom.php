<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCreateInvoiceWithCurrencyRequestCustom
{

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $serviceName
     */
    protected $serviceName = null;

    /**
     * @var int $cardForbidden
     */
    protected $cardForbidden = null;

    /**
     * @var string $userEmail
     */
    protected $userEmail = null;

    /**
     * @var string $userPhone
     */
    protected $userPhone = null;

    /**
     * @var string $referenceId
     */
    protected $referenceId = null;

    /**
     * @var string $backUrl
     */
    protected $backUrl = null;

    /**
     * @var string $requestUrl
     */
    protected $requestUrl = null;

    /**
     * @var string $addInfo
     */
    protected $addInfo = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $deathDate
     */
    protected $deathDate = null;

    /**
     * @var int $serviceType
     */
    protected $serviceType = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @param string $currency
     * @param string $serviceName
     * @param int $cardForbidden
     * @param string $userEmail
     * @param string $userPhone
     * @param string $referenceId
     * @param string $backUrl
     * @param string $requestUrl
     * @param string $addInfo
     * @param float $amount
     * @param string $deathDate
     * @param int $serviceType
     * @param string $description
     * @param int $orderNumber
     */
    public function __construct($currency, $serviceName, $cardForbidden, $userEmail, $userPhone, $referenceId, $backUrl, $requestUrl, $addInfo, $amount, $deathDate, $serviceType, $description, $orderNumber)
    {
      $this->currency = $currency;
      $this->serviceName = $serviceName;
      $this->cardForbidden = $cardForbidden;
      $this->userEmail = $userEmail;
      $this->userPhone = $userPhone;
      $this->referenceId = $referenceId;
      $this->backUrl = $backUrl;
      $this->requestUrl = $requestUrl;
      $this->addInfo = $addInfo;
      $this->amount = $amount;
      $this->deathDate = $deathDate;
      $this->serviceType = $serviceType;
      $this->description = $description;
      $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
      return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setServiceName($serviceName)
    {
      $this->serviceName = $serviceName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCardForbidden()
    {
      return $this->cardForbidden;
    }

    /**
     * @param int $cardForbidden
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setCardForbidden($cardForbidden)
    {
      $this->cardForbidden = $cardForbidden;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
      return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setUserEmail($userEmail)
    {
      $this->userEmail = $userEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPhone()
    {
      return $this->userPhone;
    }

    /**
     * @param string $userPhone
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setUserPhone($userPhone)
    {
      $this->userPhone = $userPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param string $referenceId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackUrl()
    {
      return $this->backUrl;
    }

    /**
     * @param string $backUrl
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setBackUrl($backUrl)
    {
      $this->backUrl = $backUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestUrl()
    {
      return $this->requestUrl;
    }

    /**
     * @param string $requestUrl
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setRequestUrl($requestUrl)
    {
      $this->requestUrl = $requestUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddInfo()
    {
      return $this->addInfo;
    }

    /**
     * @param string $addInfo
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setAddInfo($addInfo)
    {
      $this->addInfo = $addInfo;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeathDate()
    {
      return $this->deathDate;
    }

    /**
     * @param string $deathDate
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setDeathDate($deathDate)
    {
      $this->deathDate = $deathDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param int $serviceType
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param int $orderNumber
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceWithCurrencyRequest
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

}
