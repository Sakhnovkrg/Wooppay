<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashSetOperationsStatusResponseRecord
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
     * @param string $ext_id
     * @param int $status
     */
    public function __construct($ext_id, $status)
    {
      $this->ext_id = $ext_id;
      $this->status = $status;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashSetOperationsStatusResponseRecord
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashSetOperationsStatusResponseRecord
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
