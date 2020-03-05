<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashInvoicingRequestCustom
{

    /**
     * @var string $subjectFrom
     */
    protected $subjectFrom = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var int $lifetime
     */
    protected $lifetime = null;

    /**
     * @var int $service_type
     */
    protected $service_type = null;

    /**
     * @var int $device_type
     */
    protected $device_type = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $order_nr
     */
    protected $order_nr = null;

    /**
     * @param string $subjectFrom
     * @param float $amount
     * @param int $lifetime
     * @param int $service_type
     * @param int $device_type
     * @param string $description
     * @param string $order_nr
     */
    public function __construct($subjectFrom, $amount, $lifetime, $service_type, $device_type, $description, $order_nr)
    {
      $this->subjectFrom = $subjectFrom;
      $this->amount = $amount;
      $this->lifetime = $lifetime;
      $this->service_type = $service_type;
      $this->device_type = $device_type;
      $this->description = $description;
      $this->order_nr = $order_nr;
    }

    /**
     * @return string
     */
    public function getSubjectFrom()
    {
      return $this->subjectFrom;
    }

    /**
     * @param string $subjectFrom
     * @return \Sakhnovkrg\Wooppay\WSDL\CashInvoicingRequest
     */
    public function setSubjectFrom($subjectFrom)
    {
      $this->subjectFrom = $subjectFrom;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Sakhnovkrg\Wooppay\WSDL\CashInvoicingRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getLifetime()
    {
      return $this->lifetime;
    }

    /**
     * @param int $lifetime
     * @return \Sakhnovkrg\Wooppay\WSDL\CashInvoicingRequest
     */
    public function setLifetime($lifetime)
    {
      $this->lifetime = $lifetime;
      return $this;
    }

    /**
     * @return int
     */
    public function getService_type()
    {
      return $this->service_type;
    }

    /**
     * @param int $service_type
     * @return \Sakhnovkrg\Wooppay\WSDL\CashInvoicingRequest
     */
    public function setService_type($service_type)
    {
      $this->service_type = $service_type;
      return $this;
    }

    /**
     * @return int
     */
    public function getDevice_type()
    {
      return $this->device_type;
    }

    /**
     * @param int $device_type
     * @return \Sakhnovkrg\Wooppay\WSDL\CashInvoicingRequest
     */
    public function setDevice_type($device_type)
    {
      $this->device_type = $device_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Sakhnovkrg\Wooppay\WSDL\CashInvoicingRequest
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_nr()
    {
      return $this->order_nr;
    }

    /**
     * @param string $order_nr
     * @return \Sakhnovkrg\Wooppay\WSDL\CashInvoicingRequest
     */
    public function setOrder_nr($order_nr)
    {
      $this->order_nr = $order_nr;
      return $this;
    }

}
