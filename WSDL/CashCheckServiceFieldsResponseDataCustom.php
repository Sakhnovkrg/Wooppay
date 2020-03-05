<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashCheckServiceFieldsResponseDataCustom
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashCheckServiceFieldsResponseData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
