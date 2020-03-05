<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class PayTransferConfirmRequestCustom
{

    /**
     * @var string $PayCode
     */
    protected $PayCode = null;

    /**
     * @var string $BankName
     */
    protected $BankName = null;

    /**
     * @var string $BankCallCenter
     */
    protected $BankCallCenter = null;

    /**
     * @var string $BankPayDate
     */
    protected $BankPayDate = null;

    /**
     * @var string $BankNumberTransaction
     */
    protected $BankNumberTransaction = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $IIN
     */
    protected $IIN = null;

    /**
     * @var string $KBK
     */
    protected $KBK = null;

    /**
     * @var string $KBK_Ru
     */
    protected $KBK_Ru = null;

    /**
     * @var string $KNO
     */
    protected $KNO = null;

    /**
     * @var string $KNP
     */
    protected $KNP = null;

    /**
     * @var string $KNP_Ru
     */
    protected $KNP_Ru = null;

    /**
     * @var string $Commission
     */
    protected $Commission = null;

    /**
     * @var string $MerchantID
     */
    protected $MerchantID = null;

    /**
     * @param string $PayCode
     * @param string $BankName
     * @param string $BankCallCenter
     * @param string $BankPayDate
     * @param string $BankNumberTransaction
     * @param float $Amount
     * @param string $IIN
     * @param string $KBK
     * @param string $KBK_Ru
     * @param string $KNO
     * @param string $KNP
     * @param string $KNP_Ru
     * @param string $Commission
     * @param string $MerchantID
     */
    public function __construct($PayCode, $BankName, $BankCallCenter, $BankPayDate, $BankNumberTransaction, $Amount, $IIN, $KBK, $KBK_Ru, $KNO, $KNP, $KNP_Ru, $Commission, $MerchantID)
    {
      $this->PayCode = $PayCode;
      $this->BankName = $BankName;
      $this->BankCallCenter = $BankCallCenter;
      $this->BankPayDate = $BankPayDate;
      $this->BankNumberTransaction = $BankNumberTransaction;
      $this->Amount = $Amount;
      $this->IIN = $IIN;
      $this->KBK = $KBK;
      $this->KBK_Ru = $KBK_Ru;
      $this->KNO = $KNO;
      $this->KNP = $KNP;
      $this->KNP_Ru = $KNP_Ru;
      $this->Commission = $Commission;
      $this->MerchantID = $MerchantID;
    }

    /**
     * @return string
     */
    public function getPayCode()
    {
      return $this->PayCode;
    }

    /**
     * @param string $PayCode
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setPayCode($PayCode)
    {
      $this->PayCode = $PayCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setBankName($BankName)
    {
      $this->BankName = $BankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCallCenter()
    {
      return $this->BankCallCenter;
    }

    /**
     * @param string $BankCallCenter
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setBankCallCenter($BankCallCenter)
    {
      $this->BankCallCenter = $BankCallCenter;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankPayDate()
    {
      return $this->BankPayDate;
    }

    /**
     * @param string $BankPayDate
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setBankPayDate($BankPayDate)
    {
      $this->BankPayDate = $BankPayDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankNumberTransaction()
    {
      return $this->BankNumberTransaction;
    }

    /**
     * @param string $BankNumberTransaction
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setBankNumberTransaction($BankNumberTransaction)
    {
      $this->BankNumberTransaction = $BankNumberTransaction;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getIIN()
    {
      return $this->IIN;
    }

    /**
     * @param string $IIN
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setIIN($IIN)
    {
      $this->IIN = $IIN;
      return $this;
    }

    /**
     * @return string
     */
    public function getKBK()
    {
      return $this->KBK;
    }

    /**
     * @param string $KBK
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setKBK($KBK)
    {
      $this->KBK = $KBK;
      return $this;
    }

    /**
     * @return string
     */
    public function getKBK_Ru()
    {
      return $this->KBK_Ru;
    }

    /**
     * @param string $KBK_Ru
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setKBK_Ru($KBK_Ru)
    {
      $this->KBK_Ru = $KBK_Ru;
      return $this;
    }

    /**
     * @return string
     */
    public function getKNO()
    {
      return $this->KNO;
    }

    /**
     * @param string $KNO
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setKNO($KNO)
    {
      $this->KNO = $KNO;
      return $this;
    }

    /**
     * @return string
     */
    public function getKNP()
    {
      return $this->KNP;
    }

    /**
     * @param string $KNP
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setKNP($KNP)
    {
      $this->KNP = $KNP;
      return $this;
    }

    /**
     * @return string
     */
    public function getKNP_Ru()
    {
      return $this->KNP_Ru;
    }

    /**
     * @param string $KNP_Ru
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setKNP_Ru($KNP_Ru)
    {
      $this->KNP_Ru = $KNP_Ru;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param string $Commission
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantID()
    {
      return $this->MerchantID;
    }

    /**
     * @param string $MerchantID
     * @return \Sakhnovkrg\Wooppay\WSDL\PayTransferConfirmRequest
     */
    public function setMerchantID($MerchantID)
    {
      $this->MerchantID = $MerchantID;
      return $this;
    }

}
