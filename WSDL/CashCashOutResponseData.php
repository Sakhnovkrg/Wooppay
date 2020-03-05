<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCashOutResponseData
{

    /**
     * @var string $redirectURL
     */
    protected $redirectURL = null;

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @param string $redirectURL
     * @param int $operationId
     */
    public function __construct($redirectURL, $operationId)
    {
      $this->redirectURL = $redirectURL;
      $this->operationId = $operationId;
    }

    /**
     * @return string
     */
    public function getRedirectURL()
    {
      return $this->redirectURL;
    }

    /**
     * @param string $redirectURL
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutResponseData
     */
    public function setRedirectURL($redirectURL)
    {
      $this->redirectURL = $redirectURL;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCashOutResponseData
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
