<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetServiceFieldsResponseData
{

    /**
     * @var string $data
     */
    protected $data = null;

    /**
     * @param string $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param string $data
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetServiceFieldsResponseData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
