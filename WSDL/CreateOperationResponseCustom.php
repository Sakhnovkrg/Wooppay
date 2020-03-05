<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CreateOperationResponseCustom
{

    /**
     * @var int $OperationID
     */
    protected $OperationID = null;

    /**
     * @var string $OperationURL
     */
    protected $OperationURL = null;

    /**
     * @param int $OperationID
     * @param string $OperationURL
     */
    public function __construct($OperationID, $OperationURL)
    {
      $this->OperationID = $OperationID;
      $this->OperationURL = $OperationURL;
    }

    /**
     * @return int
     */
    public function getOperationID()
    {
      return $this->OperationID;
    }

    /**
     * @param int $OperationID
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationResponse
     */
    public function setOperationID($OperationID)
    {
      $this->OperationID = $OperationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationURL()
    {
      return $this->OperationURL;
    }

    /**
     * @param string $OperationURL
     * @return \Sakhnovkrg\Wooppay\WSDL\CreateOperationResponse
     */
    public function setOperationURL($OperationURL)
    {
      $this->OperationURL = $OperationURL;
      return $this;
    }

}
