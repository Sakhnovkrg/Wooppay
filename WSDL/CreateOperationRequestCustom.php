<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CreateOperationRequestCustom
{

    /**
     * @var string $Login
     */
    protected $Login = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $KNO
     */
    protected $KNO = null;

    /**
     * @var string $Beneficiary
     */
    protected $Beneficiary = null;

    /**
     * @var string $Beneficiary_Ru
     */
    protected $Beneficiary_Ru = null;

    /**
     * @var string $BankBeneficiary
     */
    protected $BankBeneficiary = null;

    /**
     * @var string $BankBeneficiary_Ru
     */
    protected $BankBeneficiary_Ru = null;

    /**
     * @var string $OrderDate
     */
    protected $OrderDate = null;

    /**
     * @var string $PayCode
     */
    protected $PayCode = null;

    /**
     * @var string $KBK
     */
    protected $KBK = null;

    /**
     * @var string $KBK_Ru
     */
    protected $KBK_Ru = null;

    /**
     * @var string $KNP
     */
    protected $KNP = null;

    /**
     * @var string $KNP_Ru
     */
    protected $KNP_Ru = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var string $IIN
     */
    protected $IIN = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $MerchantID
     */
    protected $MerchantID = null;

    /**
     * @var string $BackURL
     */
    protected $BackURL = null;

    /**
     * @param string $Login
     * @param string $Password
     * @param string $KNO
     * @param string $Beneficiary
     * @param string $Beneficiary_Ru
     * @param string $BankBeneficiary
     * @param string $BankBeneficiary_Ru
     * @param string $OrderDate
     * @param string $PayCode
     * @param string $KBK
     * @param string $KBK_Ru
     * @param string $KNP
     * @param string $KNP_Ru
     * @param float $Price
     * @param string $LastName
     * @param string $FirstName
     * @param string $MiddleName
     * @param string $IIN
     * @param string $Currency
     * @param string $MerchantID
     * @param string $BackURL
     */
    public function __construct($Login, $Password, $KNO, $Beneficiary, $Beneficiary_Ru, $BankBeneficiary, $BankBeneficiary_Ru, $OrderDate, $PayCode, $KBK, $KBK_Ru, $KNP, $KNP_Ru, $Price, $LastName, $FirstName, $MiddleName, $IIN, $Currency, $MerchantID, $BackURL)
    {
      $this->Login = $Login;
      $this->Password = $Password;
      $this->KNO = $KNO;
      $this->Beneficiary = $Beneficiary;
      $this->Beneficiary_Ru = $Beneficiary_Ru;
      $this->BankBeneficiary = $BankBeneficiary;
      $this->BankBeneficiary_Ru = $BankBeneficiary_Ru;
      $this->OrderDate = $OrderDate;
      $this->PayCode = $PayCode;
      $this->KBK = $KBK;
      $this->KBK_Ru = $KBK_Ru;
      $this->KNP = $KNP;
      $this->KNP_Ru = $KNP_Ru;
      $this->Price = $Price;
      $this->LastName = $LastName;
      $this->FirstName = $FirstName;
      $this->MiddleName = $MiddleName;
      $this->IIN = $IIN;
      $this->Currency = $Currency;
      $this->MerchantID = $MerchantID;
      $this->BackURL = $BackURL;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param string $Login
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setKNO($KNO)
    {
      $this->KNO = $KNO;
      return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiary()
    {
      return $this->Beneficiary;
    }

    /**
     * @param string $Beneficiary
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setBeneficiary($Beneficiary)
    {
      $this->Beneficiary = $Beneficiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiary_Ru()
    {
      return $this->Beneficiary_Ru;
    }

    /**
     * @param string $Beneficiary_Ru
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setBeneficiary_Ru($Beneficiary_Ru)
    {
      $this->Beneficiary_Ru = $Beneficiary_Ru;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankBeneficiary()
    {
      return $this->BankBeneficiary;
    }

    /**
     * @param string $BankBeneficiary
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setBankBeneficiary($BankBeneficiary)
    {
      $this->BankBeneficiary = $BankBeneficiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankBeneficiary_Ru()
    {
      return $this->BankBeneficiary_Ru;
    }

    /**
     * @param string $BankBeneficiary_Ru
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setBankBeneficiary_Ru($BankBeneficiary_Ru)
    {
      $this->BankBeneficiary_Ru = $BankBeneficiary_Ru;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderDate()
    {
      return $this->OrderDate;
    }

    /**
     * @param string $OrderDate
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setOrderDate($OrderDate)
    {
      $this->OrderDate = $OrderDate;
      return $this;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setPayCode($PayCode)
    {
      $this->PayCode = $PayCode;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setKBK_Ru($KBK_Ru)
    {
      $this->KBK_Ru = $KBK_Ru;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setKNP_Ru($KNP_Ru)
    {
      $this->KNP_Ru = $KNP_Ru;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setIIN($IIN)
    {
      $this->IIN = $IIN;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setMerchantID($MerchantID)
    {
      $this->MerchantID = $MerchantID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackURL()
    {
      return $this->BackURL;
    }

    /**
     * @param string $BackURL
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationRequest
     */
    public function setBackURL($BackURL)
    {
      $this->BackURL = $BackURL;
      return $this;
    }

}
