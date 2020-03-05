<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationReceiptResponseDataCustom
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var string $op_bin
     */
    protected $op_bin = null;

    /**
     * @var string $ch_nr
     */
    protected $ch_nr = null;

    /**
     * @var string $tr_nr
     */
    protected $tr_nr = null;

    /**
     * @var string $account_nr
     */
    protected $account_nr = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $mer_name
     */
    protected $mer_name = null;

    /**
     * @var string $mer_bin
     */
    protected $mer_bin = null;

    /**
     * @var stringArray $ident
     */
    protected $ident = null;

    /**
     * @var string $admit
     */
    protected $admit = null;

    /**
     * @var string $commis
     */
    protected $commis = null;

    /**
     * @var string $sum
     */
    protected $sum = null;

    /**
     * @var string $operation
     */
    protected $operation = null;

    /**
     * @var string $vat
     */
    protected $vat = null;

    /**
     * @var string $sup
     */
    protected $sup = null;

    /**
     * @param string $operator
     * @param string $op_bin
     * @param string $ch_nr
     * @param string $tr_nr
     * @param string $account_nr
     * @param string $date
     * @param string $mer_name
     * @param string $mer_bin
     * @param stringArray $ident
     * @param string $admit
     * @param string $commis
     * @param string $sum
     * @param string $operation
     * @param string $vat
     * @param string $sup
     */
    public function __construct($operator, $op_bin, $ch_nr, $tr_nr, $account_nr, $date, $mer_name, $mer_bin, $ident, $admit, $commis, $sum, $operation, $vat, $sup)
    {
      $this->operator = $operator;
      $this->op_bin = $op_bin;
      $this->ch_nr = $ch_nr;
      $this->tr_nr = $tr_nr;
      $this->account_nr = $account_nr;
      $this->date = $date;
      $this->mer_name = $mer_name;
      $this->mer_bin = $mer_bin;
      $this->ident = $ident;
      $this->admit = $admit;
      $this->commis = $commis;
      $this->sum = $sum;
      $this->operation = $operation;
      $this->vat = $vat;
      $this->sup = $sup;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param string $operator
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return string
     */
    public function getOp_bin()
    {
      return $this->op_bin;
    }

    /**
     * @param string $op_bin
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setOp_bin($op_bin)
    {
      $this->op_bin = $op_bin;
      return $this;
    }

    /**
     * @return string
     */
    public function getCh_nr()
    {
      return $this->ch_nr;
    }

    /**
     * @param string $ch_nr
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setCh_nr($ch_nr)
    {
      $this->ch_nr = $ch_nr;
      return $this;
    }

    /**
     * @return string
     */
    public function getTr_nr()
    {
      return $this->tr_nr;
    }

    /**
     * @param string $tr_nr
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setTr_nr($tr_nr)
    {
      $this->tr_nr = $tr_nr;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount_nr()
    {
      return $this->account_nr;
    }

    /**
     * @param string $account_nr
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setAccount_nr($account_nr)
    {
      $this->account_nr = $account_nr;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return string
     */
    public function getMer_name()
    {
      return $this->mer_name;
    }

    /**
     * @param string $mer_name
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setMer_name($mer_name)
    {
      $this->mer_name = $mer_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMer_bin()
    {
      return $this->mer_bin;
    }

    /**
     * @param string $mer_bin
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setMer_bin($mer_bin)
    {
      $this->mer_bin = $mer_bin;
      return $this;
    }

    /**
     * @return stringArray
     */
    public function getIdent()
    {
      return $this->ident;
    }

    /**
     * @param stringArray $ident
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setIdent($ident)
    {
      $this->ident = $ident;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdmit()
    {
      return $this->admit;
    }

    /**
     * @param string $admit
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setAdmit($admit)
    {
      $this->admit = $admit;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommis()
    {
      return $this->commis;
    }

    /**
     * @param string $commis
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setCommis($commis)
    {
      $this->commis = $commis;
      return $this;
    }

    /**
     * @return string
     */
    public function getSum()
    {
      return $this->sum;
    }

    /**
     * @param string $sum
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setSum($sum)
    {
      $this->sum = $sum;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
      return $this->operation;
    }

    /**
     * @param string $operation
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setOperation($operation)
    {
      $this->operation = $operation;
      return $this;
    }

    /**
     * @return string
     */
    public function getVat()
    {
      return $this->vat;
    }

    /**
     * @param string $vat
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setVat($vat)
    {
      $this->vat = $vat;
      return $this;
    }

    /**
     * @return string
     */
    public function getSup()
    {
      return $this->sup;
    }

    /**
     * @param string $sup
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationReceiptResponseData
     */
    public function setSup($sup)
    {
      $this->sup = $sup;
      return $this;
    }

}
