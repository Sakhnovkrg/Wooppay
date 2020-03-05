<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashSetOperationsStatusRequest
{

    /**
     * @var CashSetOperationsStatusRequestRecordArray $records
     */
    protected $records = null;

    /**
     * @param CashSetOperationsStatusRequestRecordArray $records
     */
    public function __construct($records)
    {
      $this->records = $records;
    }

    /**
     * @return CashSetOperationsStatusRequestRecordArray
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param CashSetOperationsStatusRequestRecordArray $records
     * @return \Sakhnovkrg\Wooppay\WSDL\CashSetOperationsStatusRequest
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
