<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationDataRequest
{

    /**
     * @var intArray $operationId
     */
    protected $operationId = null;

    /**
     * @param intArray $operationId
     */
    public function __construct($operationId)
    {
      $this->operationId = $operationId;
    }

    /**
     * @return intArray
     */
    public function getOperationId()
    {
      return $this->operationId;
    }

    /**
     * @param intArray $operationId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
