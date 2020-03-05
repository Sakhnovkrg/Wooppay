<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCashOutInputDataRequestCustom
{

    /**
     * @var int $operationID
     */
    protected $operationID = null;

    /**
     * @var string $cardHash
     */
    protected $cardHash = null;

    /**
     * @param int $operationID
     * @param string $cardHash
     */
    public function __construct($operationID, $cardHash)
    {
      $this->operationID = $operationID;
      $this->cardHash = $cardHash;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutInputDataRequest
     */
    public function setOperationID($operationID)
    {
      $this->operationID = $operationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardHash()
    {
      return $this->cardHash;
    }

    /**
     * @param string $cardHash
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutInputDataRequest
     */
    public function setCardHash($cardHash)
    {
      $this->cardHash = $cardHash;
      return $this;
    }

}
