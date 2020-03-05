<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashSetOperationsStatusResponseRecordArrayCustom
{

    /**
     * @var CashSetOperationsStatusResponseRecord[] $CashSetOperationsStatusResponseRecordArray
     */
    protected $CashSetOperationsStatusResponseRecordArray = null;

    /**
     * @param CashSetOperationsStatusResponseRecord[] $CashSetOperationsStatusResponseRecordArray
     */
    public function __construct(array $CashSetOperationsStatusResponseRecordArray)
    {
      $this->CashSetOperationsStatusResponseRecordArray = $CashSetOperationsStatusResponseRecordArray;
    }

    /**
     * @return CashSetOperationsStatusResponseRecord[]
     */
    public function getCashSetOperationsStatusResponseRecordArray()
    {
      return $this->CashSetOperationsStatusResponseRecordArray;
    }

    /**
     * @param CashSetOperationsStatusResponseRecord[] $CashSetOperationsStatusResponseRecordArray
     * @return \Sakhnovkrg\Wooppay\WSDL\CashSetOperationsStatusResponseRecordArray
     */
    public function setCashSetOperationsStatusResponseRecordArray(array $CashSetOperationsStatusResponseRecordArray)
    {
      $this->CashSetOperationsStatusResponseRecordArray = $CashSetOperationsStatusResponseRecordArray;
      return $this;
    }

}
