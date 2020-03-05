<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetReceiptForTransactionRequest
{

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @param int $transactionId
     * @param int $operationId
     */
    public function __construct($transactionId, $operationId)
    {
      $this->transactionId = $transactionId;
      $this->operationId = $operationId;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param int $transactionId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetReceiptForTransactionRequest
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetReceiptForTransactionRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
