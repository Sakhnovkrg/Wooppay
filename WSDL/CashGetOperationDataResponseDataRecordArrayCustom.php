<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationDataResponseDataRecordArrayCustom
{

    /**
     * @var CashGetOperationDataResponseDataRecord[] $CashGetOperationDataResponseDataRecordArray
     */
    protected $CashGetOperationDataResponseDataRecordArray = null;

    /**
     * @param CashGetOperationDataResponseDataRecord[] $CashGetOperationDataResponseDataRecordArray
     */
    public function __construct(array $CashGetOperationDataResponseDataRecordArray)
    {
      $this->CashGetOperationDataResponseDataRecordArray = $CashGetOperationDataResponseDataRecordArray;
    }

    /**
     * @return CashGetOperationDataResponseDataRecord[]
     */
    public function getCashGetOperationDataResponseDataRecordArray()
    {
      return $this->CashGetOperationDataResponseDataRecordArray;
    }

    /**
     * @param CashGetOperationDataResponseDataRecord[] $CashGetOperationDataResponseDataRecordArray
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecordArray
     */
    public function setCashGetOperationDataResponseDataRecordArray(array $CashGetOperationDataResponseDataRecordArray)
    {
      $this->CashGetOperationDataResponseDataRecordArray = $CashGetOperationDataResponseDataRecordArray;
      return $this;
    }

}
