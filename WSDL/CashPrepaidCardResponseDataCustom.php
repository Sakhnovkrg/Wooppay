<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashPrepaidCardResponseDataCustom
{

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @var string $protectionCode
     */
    protected $protectionCode = null;

    /**
     * @param int $operationId
     * @param string $protectionCode
     */
    public function __construct($operationId, $protectionCode)
    {
      $this->operationId = $operationId;
      $this->protectionCode = $protectionCode;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardResponseData
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProtectionCode()
    {
      return $this->protectionCode;
    }

    /**
     * @param string $protectionCode
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardResponseData
     */
    public function setProtectionCode($protectionCode)
    {
      $this->protectionCode = $protectionCode;
      return $this;
    }

}
