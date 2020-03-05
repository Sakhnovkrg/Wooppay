<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetTransfersResponseDataRecordArrayCustom
{

    /**
     * @var CashGetTransfersResponseDataRecord[] $CashGetTransfersResponseDataRecordArray
     */
    protected $CashGetTransfersResponseDataRecordArray = null;

    /**
     * @param CashGetTransfersResponseDataRecord[] $CashGetTransfersResponseDataRecordArray
     */
    public function __construct(array $CashGetTransfersResponseDataRecordArray)
    {
      $this->CashGetTransfersResponseDataRecordArray = $CashGetTransfersResponseDataRecordArray;
    }

    /**
     * @return CashGetTransfersResponseDataRecord[]
     */
    public function getCashGetTransfersResponseDataRecordArray()
    {
      return $this->CashGetTransfersResponseDataRecordArray;
    }

    /**
     * @param CashGetTransfersResponseDataRecord[] $CashGetTransfersResponseDataRecordArray
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecordArray
     */
    public function setCashGetTransfersResponseDataRecordArray(array $CashGetTransfersResponseDataRecordArray)
    {
      $this->CashGetTransfersResponseDataRecordArray = $CashGetTransfersResponseDataRecordArray;
      return $this;
    }

}
