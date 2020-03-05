<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashPrepaidCardPerformResponse
{

    /**
     * @var CashPrepaidCardPerformResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CashPrepaidCardPerformResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CashPrepaidCardPerformResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CashPrepaidCardPerformResponseData $response
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponse
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
