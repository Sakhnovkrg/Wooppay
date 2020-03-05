<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class PayConfirmRequest
{

    /**
     * @var string $PayCode
     */
    protected $PayCode = null;

    /**
     * @var string $OperatorName
     */
    protected $OperatorName = null;

    /**
     * @var string $OperatorCallCenter
     */
    protected $OperatorCallCenter = null;

    /**
     * @var string $OperatorPayDate
     */
    protected $OperatorPayDate = null;

    /**
     * @var string $NumberWallet
     */
    protected $NumberWallet = null;

    /**
     * @var string $OperatorNumberTransaction
     */
    protected $OperatorNumberTransaction = null;

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
     * @param string $OperatorName
     * @param string $OperatorCallCenter
     * @param string $OperatorPayDate
     * @param string $NumberWallet
     * @param string $OperatorNumberTransaction
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
    public function __construct($PayCode, $OperatorName, $OperatorCallCenter, $OperatorPayDate, $NumberWallet, $OperatorNumberTransaction, $Amount, $IIN, $KBK, $KBK_Ru, $KNO, $KNP, $KNP_Ru, $Commission, $MerchantID)
    {
      $this->PayCode = $PayCode;
      $this->OperatorName = $OperatorName;
      $this->OperatorCallCenter = $OperatorCallCenter;
      $this->OperatorPayDate = $OperatorPayDate;
      $this->NumberWallet = $NumberWallet;
      $this->OperatorNumberTransaction = $OperatorNumberTransaction;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
     */
    public function setPayCode($PayCode)
    {
      $this->PayCode = $PayCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorName()
    {
      return $this->OperatorName;
    }

    /**
     * @param string $OperatorName
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
     */
    public function setOperatorName($OperatorName)
    {
      $this->OperatorName = $OperatorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorCallCenter()
    {
      return $this->OperatorCallCenter;
    }

    /**
     * @param string $OperatorCallCenter
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
     */
    public function setOperatorCallCenter($OperatorCallCenter)
    {
      $this->OperatorCallCenter = $OperatorCallCenter;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorPayDate()
    {
      return $this->OperatorPayDate;
    }

    /**
     * @param string $OperatorPayDate
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
     */
    public function setOperatorPayDate($OperatorPayDate)
    {
      $this->OperatorPayDate = $OperatorPayDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumberWallet()
    {
      return $this->NumberWallet;
    }

    /**
     * @param string $NumberWallet
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
     */
    public function setNumberWallet($NumberWallet)
    {
      $this->NumberWallet = $NumberWallet;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorNumberTransaction()
    {
      return $this->OperatorNumberTransaction;
    }

    /**
     * @param string $OperatorNumberTransaction
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
     */
    public function setOperatorNumberTransaction($OperatorNumberTransaction)
    {
      $this->OperatorNumberTransaction = $OperatorNumberTransaction;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\PayConfirmRequest
     */
    public function setMerchantID($MerchantID)
    {
      $this->MerchantID = $MerchantID;
      return $this;
    }

}
