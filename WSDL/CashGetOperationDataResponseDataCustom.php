<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationDataResponseDataCustom
{

    /**
     * @var CashGetOperationDataResponseDataRecordArray $records
     */
    protected $records = null;

    /**
     * @param CashGetOperationDataResponseDataRecordArray $records
     */
    public function __construct($records)
    {
      $this->records = $records;
    }

    /**
     * @return CashGetOperationDataResponseDataRecordArray
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param CashGetOperationDataResponseDataRecordArray $records
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseData
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
