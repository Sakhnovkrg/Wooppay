<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashPrepaidCardPerformResponseDataCustom
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $dateOfBirth
     */
    protected $dateOfBirth = null;

    /**
     * @var string $documentNumber
     */
    protected $documentNumber = null;

    /**
     * @var int $documentType
     */
    protected $documentType = null;

    /**
     * @var string $dateOfIssue
     */
    protected $dateOfIssue = null;

    /**
     * @var string $validity
     */
    protected $validity = null;

    /**
     * @var string $personalNumber
     */
    protected $personalNumber = null;

    /**
     * @param float $amount
     * @param string $name
     * @param string $dateOfBirth
     * @param string $documentNumber
     * @param int $documentType
     * @param string $dateOfIssue
     * @param string $validity
     * @param string $personalNumber
     */
    public function __construct($amount, $name, $dateOfBirth, $documentNumber, $documentType, $dateOfIssue, $validity, $personalNumber)
    {
      $this->amount = $amount;
      $this->name = $name;
      $this->dateOfBirth = $dateOfBirth;
      $this->documentNumber = $documentNumber;
      $this->documentType = $documentType;
      $this->dateOfIssue = $dateOfIssue;
      $this->validity = $validity;
      $this->personalNumber = $personalNumber;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
      return $this->dateOfBirth;
    }

    /**
     * @param string $dateOfBirth
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setDateOfBirth($dateOfBirth)
    {
      $this->dateOfBirth = $dateOfBirth;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
      return $this->documentNumber;
    }

    /**
     * @param string $documentNumber
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setDocumentNumber($documentNumber)
    {
      $this->documentNumber = $documentNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getDocumentType()
    {
      return $this->documentType;
    }

    /**
     * @param int $documentType
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setDocumentType($documentType)
    {
      $this->documentType = $documentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateOfIssue()
    {
      return $this->dateOfIssue;
    }

    /**
     * @param string $dateOfIssue
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setDateOfIssue($dateOfIssue)
    {
      $this->dateOfIssue = $dateOfIssue;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidity()
    {
      return $this->validity;
    }

    /**
     * @param string $validity
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setValidity($validity)
    {
      $this->validity = $validity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonalNumber()
    {
      return $this->personalNumber;
    }

    /**
     * @param string $personalNumber
     * @return \Sakhnovkrg\Wooppay\WSDL\CashPrepaidCardPerformResponseData
     */
    public function setPersonalNumber($personalNumber)
    {
      $this->personalNumber = $personalNumber;
      return $this;
    }

}
