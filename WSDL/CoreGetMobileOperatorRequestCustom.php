<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreGetMobileOperatorRequestCustom
{

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @param string $phone
     */
    public function __construct($phone)
    {
      $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetMobileOperatorRequest
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

}
