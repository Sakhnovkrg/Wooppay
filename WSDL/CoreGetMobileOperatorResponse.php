<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreGetMobileOperatorResponse
{

    /**
     * @var CoreGetMobileOperatorResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CoreGetMobileOperatorResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CoreGetMobileOperatorResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CoreGetMobileOperatorResponseData $response
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetMobileOperatorResponse
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetMobileOperatorResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
