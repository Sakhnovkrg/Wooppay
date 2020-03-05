<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetOperationDataResponseDataRecordCustom
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var int $lotId
     */
    protected $lotId = null;

    /**
     * @var float $sum
     */
    protected $sum = null;

    /**
     * @var float $fee
     */
    protected $fee = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $fromSubject
     */
    protected $fromSubject = null;

    /**
     * @var string $toSubject
     */
    protected $toSubject = null;

    /**
     * @var string $fromFullName
     */
    protected $fromFullName = null;

    /**
     * @var string $toFullName
     */
    protected $toFullName = null;

    /**
     * @param int $id
     * @param int $type
     * @param int $lotId
     * @param float $sum
     * @param float $fee
     * @param string $date
     * @param int $status
     * @param string $comment
     * @param string $fromSubject
     * @param string $toSubject
     * @param string $fromFullName
     * @param string $toFullName
     */
    public function __construct($id, $type, $lotId, $sum, $fee, $date, $status, $comment, $fromSubject, $toSubject, $fromFullName, $toFullName)
    {
      $this->id = $id;
      $this->type = $type;
      $this->lotId = $lotId;
      $this->sum = $sum;
      $this->fee = $fee;
      $this->date = $date;
      $this->status = $status;
      $this->comment = $comment;
      $this->fromSubject = $fromSubject;
      $this->toSubject = $toSubject;
      $this->fromFullName = $fromFullName;
      $this->toFullName = $toFullName;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getLotId()
    {
      return $this->lotId;
    }

    /**
     * @param int $lotId
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setLotId($lotId)
    {
      $this->lotId = $lotId;
      return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
      return $this->sum;
    }

    /**
     * @param float $sum
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setSum($sum)
    {
      $this->sum = $sum;
      return $this;
    }

    /**
     * @return float
     */
    public function getFee()
    {
      return $this->fee;
    }

    /**
     * @param float $fee
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setFee($fee)
    {
      $this->fee = $fee;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param int $status
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromSubject()
    {
      return $this->fromSubject;
    }

    /**
     * @param string $fromSubject
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setFromSubject($fromSubject)
    {
      $this->fromSubject = $fromSubject;
      return $this;
    }

    /**
     * @return string
     */
    public function getToSubject()
    {
      return $this->toSubject;
    }

    /**
     * @param string $toSubject
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setToSubject($toSubject)
    {
      $this->toSubject = $toSubject;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromFullName()
    {
      return $this->fromFullName;
    }

    /**
     * @param string $fromFullName
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setFromFullName($fromFullName)
    {
      $this->fromFullName = $fromFullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getToFullName()
    {
      return $this->toFullName;
    }

    /**
     * @param string $toFullName
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataResponseDataRecord
     */
    public function setToFullName($toFullName)
    {
      $this->toFullName = $toFullName;
      return $this;
    }

}
