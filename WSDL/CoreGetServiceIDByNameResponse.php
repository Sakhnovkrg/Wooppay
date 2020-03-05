<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreGetServiceIDByNameResponse
{

    /**
     * @var CoreGetServiceIDByNameResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CoreGetServiceIDByNameResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CoreGetServiceIDByNameResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CoreGetServiceIDByNameResponseData $response
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetServiceIDByNameResponse
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetServiceIDByNameResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
