<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashSetOperationsStatusRequestRecordArray
{

    /**
     * @var CashSetOperationsStatusRequestRecord[] $CashSetOperationsStatusRequestRecordArray
     */
    protected $CashSetOperationsStatusRequestRecordArray = null;

    /**
     * @param CashSetOperationsStatusRequestRecord[] $CashSetOperationsStatusRequestRecordArray
     */
    public function __construct(array $CashSetOperationsStatusRequestRecordArray)
    {
      $this->CashSetOperationsStatusRequestRecordArray = $CashSetOperationsStatusRequestRecordArray;
    }

    /**
     * @return CashSetOperationsStatusRequestRecord[]
     */
    public function getCashSetOperationsStatusRequestRecordArray()
    {
      return $this->CashSetOperationsStatusRequestRecordArray;
    }

    /**
     * @param CashSetOperationsStatusRequestRecord[] $CashSetOperationsStatusRequestRecordArray
     * @return \Sakhnovkrg\Wooppay\WSDL\CashSetOperationsStatusRequestRecordArray
     */
    public function setCashSetOperationsStatusRequestRecordArray(array $CashSetOperationsStatusRequestRecordArray)
    {
      $this->CashSetOperationsStatusRequestRecordArray = $CashSetOperationsStatusRequestRecordArray;
      return $this;
    }

}
