<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationsStatusRequest
{

    /**
     * @var string $ext_id
     */
    protected $ext_id = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var string $dateTo
     */
    protected $dateTo = null;

    /**
     * @param string $ext_id
     * @param int $status
     * @param string $dateFrom
     * @param string $dateTo
     */
    public function __construct($ext_id, $status, $dateFrom, $dateTo)
    {
      $this->ext_id = $ext_id;
      $this->status = $status;
      $this->dateFrom = $dateFrom;
      $this->dateTo = $dateTo;
    }

    /**
     * @return string
     */
    public function getExt_id()
    {
      return $this->ext_id;
    }

    /**
     * @param string $ext_id
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationsStatusRequest
     */
    public function setExt_id($ext_id)
    {
      $this->ext_id = $ext_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param int $status
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationsStatusRequest
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
      return $this->dateFrom;
    }

    /**
     * @param string $dateFrom
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationsStatusRequest
     */
    public function setDateFrom($dateFrom)
    {
      $this->dateFrom = $dateFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
      return $this->dateTo;
    }

    /**
     * @param string $dateTo
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationsStatusRequest
     */
    public function setDateTo($dateTo)
    {
      $this->dateTo = $dateTo;
      return $this;
    }

}
