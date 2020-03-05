<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCreateOperationRequestCustom
{

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var string $receiver
     */
    protected $receiver = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var string $fields
     */
    protected $fields = null;

    /**
     * @var int $userGroup
     */
    protected $userGroup = null;

    /**
     * @param int $type
     * @param string $receiver
     * @param float $amount
     * @param string $description
     * @param int $productId
     * @param string $service
     * @param string $fields
     * @param int $userGroup
     */
    public function __construct($type, $receiver, $amount, $description, $productId, $service, $fields, $userGroup)
    {
      $this->type = $type;
      $this->receiver = $receiver;
      $this->amount = $amount;
      $this->description = $description;
      $this->productId = $productId;
      $this->service = $service;
      $this->fields = $fields;
      $this->userGroup = $userGroup;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param string $receiver
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setService($service)
    {
      $this->service = $service;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserGroup()
    {
      return $this->userGroup;
    }

    /**
     * @param int $userGroup
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationRequest
     */
    public function setUserGroup($userGroup)
    {
      $this->userGroup = $userGroup;
      return $this;
    }

}
