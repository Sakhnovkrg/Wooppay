<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreGetServiceIDByNameResponseData
{

    /**
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param int $serviceId
     * @param int $error_code
     */
    public function __construct($serviceId, $error_code)
    {
      $this->serviceId = $serviceId;
      $this->error_code = $error_code;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
      return $this->serviceId;
    }

    /**
     * @param int $serviceId
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetServiceIDByNameResponseData
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetServiceIDByNameResponseData
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
