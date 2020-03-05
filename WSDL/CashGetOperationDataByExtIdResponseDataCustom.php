<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationDataByExtIdResponseDataCustom
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $parentId
     */
    protected $parentId = null;

    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @var int $currency
     */
    protected $currency = null;

    /**
     * @var string $dateOper
     */
    protected $dateOper = null;

    /**
     * @var string $dateDone
     */
    protected $dateDone = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var int $subjectFromId
     */
    protected $subjectFromId = null;

    /**
     * @var int $subjectToId
     */
    protected $subjectToId = null;

    /**
     * @var int $specialistId
     */
    protected $specialistId = null;

    /**
     * @var string $subjectFrom
     */
    protected $subjectFrom = null;

    /**
     * @var string $subjectTo
     */
    protected $subjectTo = null;

    /**
     * @var string $specialist
     */
    protected $specialist = null;

    /**
     * @var int $commissionLower
     */
    protected $commissionLower = null;

    /**
     * @var int $commissionUpper
     */
    protected $commissionUpper = null;

    /**
     * @var int $commissionUpperLower
     */
    protected $commissionUpperLower = null;

    /**
     * @var int $retSum
     */
    protected $retSum = null;

    /**
     * @var int $lifeTime
     */
    protected $lifeTime = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var int $cashback
     */
    protected $cashback = null;

    /**
     * @var string $paymentAccount
     */
    protected $paymentAccount = null;

    /**
     * @var int $secure
     */
    protected $secure = null;

    /**
     * @param int $id
     * @param int $parentId
     * @param int $amount
     * @param int $currency
     * @param string $dateOper
     * @param string $dateDone
     * @param int $status
     * @param string $description
     * @param int $serviceId
     * @param int $orderId
     * @param int $type
     * @param int $productId
     * @param int $subjectFromId
     * @param int $subjectToId
     * @param int $specialistId
     * @param string $subjectFrom
     * @param string $subjectTo
     * @param string $specialist
     * @param int $commissionLower
     * @param int $commissionUpper
     * @param int $commissionUpperLower
     * @param int $retSum
     * @param int $lifeTime
     * @param string $externalId
     * @param int $cashback
     * @param string $paymentAccount
     * @param int $secure
     */
    public function __construct($id, $parentId, $amount, $currency, $dateOper, $dateDone, $status, $description, $serviceId, $orderId, $type, $productId, $subjectFromId, $subjectToId, $specialistId, $subjectFrom, $subjectTo, $specialist, $commissionLower, $commissionUpper, $commissionUpperLower, $retSum, $lifeTime, $externalId, $cashback, $paymentAccount, $secure)
    {
      $this->id = $id;
      $this->parentId = $parentId;
      $this->amount = $amount;
      $this->currency = $currency;
      $this->dateOper = $dateOper;
      $this->dateDone = $dateDone;
      $this->status = $status;
      $this->description = $description;
      $this->serviceId = $serviceId;
      $this->orderId = $orderId;
      $this->type = $type;
      $this->productId = $productId;
      $this->subjectFromId = $subjectFromId;
      $this->subjectToId = $subjectToId;
      $this->specialistId = $specialistId;
      $this->subjectFrom = $subjectFrom;
      $this->subjectTo = $subjectTo;
      $this->specialist = $specialist;
      $this->commissionLower = $commissionLower;
      $this->commissionUpper = $commissionUpper;
      $this->commissionUpperLower = $commissionUpperLower;
      $this->retSum = $retSum;
      $this->lifeTime = $lifeTime;
      $this->externalId = $externalId;
      $this->cashback = $cashback;
      $this->paymentAccount = $paymentAccount;
      $this->secure = $secure;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
      return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setParentId($parentId)
    {
      $this->parentId = $parentId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param int $amount
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param int $currency
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateOper()
    {
      return $this->dateOper;
    }

    /**
     * @param string $dateOper
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setDateOper($dateOper)
    {
      $this->dateOper = $dateOper;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateDone()
    {
      return $this->dateDone;
    }

    /**
     * @param string $dateDone
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setDateDone($dateDone)
    {
      $this->dateDone = $dateDone;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param int $status
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubjectFromId()
    {
      return $this->subjectFromId;
    }

    /**
     * @param int $subjectFromId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setSubjectFromId($subjectFromId)
    {
      $this->subjectFromId = $subjectFromId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubjectToId()
    {
      return $this->subjectToId;
    }

    /**
     * @param int $subjectToId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setSubjectToId($subjectToId)
    {
      $this->subjectToId = $subjectToId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpecialistId()
    {
      return $this->specialistId;
    }

    /**
     * @param int $specialistId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setSpecialistId($specialistId)
    {
      $this->specialistId = $specialistId;
      return $this;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setSubjectFrom($subjectFrom)
    {
      $this->subjectFrom = $subjectFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectTo()
    {
      return $this->subjectTo;
    }

    /**
     * @param string $subjectTo
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setSubjectTo($subjectTo)
    {
      $this->subjectTo = $subjectTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialist()
    {
      return $this->specialist;
    }

    /**
     * @param string $specialist
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setSpecialist($specialist)
    {
      $this->specialist = $specialist;
      return $this;
    }

    /**
     * @return int
     */
    public function getCommissionLower()
    {
      return $this->commissionLower;
    }

    /**
     * @param int $commissionLower
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setCommissionLower($commissionLower)
    {
      $this->commissionLower = $commissionLower;
      return $this;
    }

    /**
     * @return int
     */
    public function getCommissionUpper()
    {
      return $this->commissionUpper;
    }

    /**
     * @param int $commissionUpper
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setCommissionUpper($commissionUpper)
    {
      $this->commissionUpper = $commissionUpper;
      return $this;
    }

    /**
     * @return int
     */
    public function getCommissionUpperLower()
    {
      return $this->commissionUpperLower;
    }

    /**
     * @param int $commissionUpperLower
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setCommissionUpperLower($commissionUpperLower)
    {
      $this->commissionUpperLower = $commissionUpperLower;
      return $this;
    }

    /**
     * @return int
     */
    public function getRetSum()
    {
      return $this->retSum;
    }

    /**
     * @param int $retSum
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setRetSum($retSum)
    {
      $this->retSum = $retSum;
      return $this;
    }

    /**
     * @return int
     */
    public function getLifeTime()
    {
      return $this->lifeTime;
    }

    /**
     * @param int $lifeTime
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setLifeTime($lifeTime)
    {
      $this->lifeTime = $lifeTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCashback()
    {
      return $this->cashback;
    }

    /**
     * @param int $cashback
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setCashback($cashback)
    {
      $this->cashback = $cashback;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAccount()
    {
      return $this->paymentAccount;
    }

    /**
     * @param string $paymentAccount
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setPaymentAccount($paymentAccount)
    {
      $this->paymentAccount = $paymentAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getSecure()
    {
      return $this->secure;
    }

    /**
     * @param int $secure
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponseData
     */
    public function setSecure($secure)
    {
      $this->secure = $secure;
      return $this;
    }

}
