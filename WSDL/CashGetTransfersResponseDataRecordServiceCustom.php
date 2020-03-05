<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetTransfersResponseDataRecordServiceCustom
{

    /**
     * @var string $service_name
     */
    protected $service_name = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $picture
     */
    protected $picture = null;

    /**
     * @param string $service_name
     * @param string $name
     * @param string $picture
     */
    public function __construct($service_name, $name, $picture)
    {
      $this->service_name = $service_name;
      $this->name = $name;
      $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getService_name()
    {
      return $this->service_name;
    }

    /**
     * @param string $service_name
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecordService
     */
    public function setService_name($service_name)
    {
      $this->service_name = $service_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecordService
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
      return $this->picture;
    }

    /**
     * @param string $picture
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecordService
     */
    public function setPicture($picture)
    {
      $this->picture = $picture;
      return $this;
    }

}
