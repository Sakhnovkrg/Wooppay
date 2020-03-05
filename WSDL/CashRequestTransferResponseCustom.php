<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashRequestTransferResponseCustom
{

    /**
     * @var CashRequestTransferResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CashRequestTransferResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CashRequestTransferResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CashRequestTransferResponseData $response
     * @return \Sakhnovkrg\Wooppay\WSDL\CashRequestTransferResponse
     */
    public function setResponse($response)
    {
      $this->response = $response;
      return $this;
    }

    /**
     * @return int
     */
    public function getError_code()
    {
      return $this->error_code;
    }

    /**
     * @param int $error_code
     * @return \Sakhnovkrg\Wooppay\WSDL\CashRequestTransferResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
