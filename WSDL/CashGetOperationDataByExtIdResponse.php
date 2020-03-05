<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationDataByExtIdResponse
{

    /**
     * @var CashGetOperationDataByExtIdResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CashGetOperationDataByExtIdResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CashGetOperationDataByExtIdResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CashGetOperationDataByExtIdResponseData $response
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponse
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataByExtIdResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
