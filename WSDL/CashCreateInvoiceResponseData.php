<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCreateInvoiceResponseData
{

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @var string $operationUrl
     */
    protected $operationUrl = null;

    /**
     * @param int $operationId
     * @param string $operationUrl
     */
    public function __construct($operationId, $operationUrl)
    {
      $this->operationId = $operationId;
      $this->operationUrl = $operationUrl;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceResponseData
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationUrl()
    {
      return $this->operationUrl;
    }

    /**
     * @param string $operationUrl
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceResponseData
     */
    public function setOperationUrl($operationUrl)
    {
      $this->operationUrl = $operationUrl;
      return $this;
    }

}
