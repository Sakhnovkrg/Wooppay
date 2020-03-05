<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCreateOperationResponseCustom
{

    /**
     * @var CashCreateOperationResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CashCreateOperationResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CashCreateOperationResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CashCreateOperationResponseData $response
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationResponse
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCreateOperationResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
