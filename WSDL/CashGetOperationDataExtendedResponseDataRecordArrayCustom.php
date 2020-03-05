<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationDataExtendedResponseDataRecordArrayCustom
{

    /**
     * @var CashGetOperationDataExtendedResponseDataRecord[] $CashGetOperationDataExtendedResponseDataRecordArray
     */
    protected $CashGetOperationDataExtendedResponseDataRecordArray = null;

    /**
     * @param CashGetOperationDataExtendedResponseDataRecord[] $CashGetOperationDataExtendedResponseDataRecordArray
     */
    public function __construct(array $CashGetOperationDataExtendedResponseDataRecordArray)
    {
      $this->CashGetOperationDataExtendedResponseDataRecordArray = $CashGetOperationDataExtendedResponseDataRecordArray;
    }

    /**
     * @return CashGetOperationDataExtendedResponseDataRecord[]
     */
    public function getCashGetOperationDataExtendedResponseDataRecordArray()
    {
      return $this->CashGetOperationDataExtendedResponseDataRecordArray;
    }

    /**
     * @param CashGetOperationDataExtendedResponseDataRecord[] $CashGetOperationDataExtendedResponseDataRecordArray
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataExtendedResponseDataRecordArray
     */
    public function setCashGetOperationDataExtendedResponseDataRecordArray(array $CashGetOperationDataExtendedResponseDataRecordArray)
    {
      $this->CashGetOperationDataExtendedResponseDataRecordArray = $CashGetOperationDataExtendedResponseDataRecordArray;
      return $this;
    }

}
