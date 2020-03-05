<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashConfirmOperationExtRequestCustom
{

    /**
     * @var int $confirmationCode
     */
    protected $confirmationCode = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @param int $confirmationCode
     * @param string $phone
     * @param int $operationId
     * @param int $type
     */
    public function __construct($confirmationCode, $phone, $operationId, $type)
    {
      $this->confirmationCode = $confirmationCode;
      $this->phone = $phone;
      $this->operationId = $operationId;
      $this->type = $type;
    }

    /**
     * @return int
     */
    public function getConfirmationCode()
    {
      return $this->confirmationCode;
    }

    /**
     * @param int $confirmationCode
     * @return \Sakhnovkrg\Wooppay\WSDL\CashConfirmOperationExtRequest
     */
    public function setConfirmationCode($confirmationCode)
    {
      $this->confirmationCode = $confirmationCode;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashConfirmOperationExtRequest
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashConfirmOperationExtRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashConfirmOperationExtRequest
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
