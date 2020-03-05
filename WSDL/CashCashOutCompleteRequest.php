<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCashOutCompleteRequest
{

    /**
     * @var int $operationID
     */
    protected $operationID = null;

    /**
     * @param int $operationID
     */
    public function __construct($operationID)
    {
      $this->operationID = $operationID;
    }

    /**
     * @return int
     */
    public function getOperationID()
    {
      return $this->operationID;
    }

    /**
     * @param int $operationID
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutCompleteRequest
     */
    public function setOperationID($operationID)
    {
      $this->operationID = $operationID;
      return $this;
    }

}
