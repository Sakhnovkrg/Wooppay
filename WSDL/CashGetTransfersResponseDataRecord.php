<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetTransfersResponseDataRecord
{

    /**
     * @var int $id
     */
    protected $id = null;

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
     * @var int $direction
     */
    protected $direction = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var float $sum
     */
    protected $sum = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var int $lotId
     */
    protected $lotId = null;

    /**
     * @var CashGetTransfersResponseDataRecordService $service
     */
    protected $service = null;

    /**
     * @var string $avatarName
     */
    protected $avatarName = null;

    /**
     * @var string $imageLotName
     */
    protected $imageLotName = null;

    /**
     * @param int $id
     * @param string $fromSubject
     * @param string $toSubject
     * @param string $fromFullName
     * @param string $toFullName
     * @param int $direction
     * @param string $date
     * @param float $sum
     * @param int $type
     * @param int $status
     * @param string $comment
     * @param int $lotId
     * @param CashGetTransfersResponseDataRecordService $service
     * @param string $avatarName
     * @param string $imageLotName
     */
    public function __construct($id, $fromSubject, $toSubject, $fromFullName, $toFullName, $direction, $date, $sum, $type, $status, $comment, $lotId, $service, $avatarName, $imageLotName)
    {
      $this->id = $id;
      $this->fromSubject = $fromSubject;
      $this->toSubject = $toSubject;
      $this->fromFullName = $fromFullName;
      $this->toFullName = $toFullName;
      $this->direction = $direction;
      $this->date = $date;
      $this->sum = $sum;
      $this->type = $type;
      $this->status = $status;
      $this->comment = $comment;
      $this->lotId = $lotId;
      $this->service = $service;
      $this->avatarName = $avatarName;
      $this->imageLotName = $imageLotName;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setToFullName($toFullName)
    {
      $this->toFullName = $toFullName;
      return $this;
    }

    /**
     * @return int
     */
    public function getDirection()
    {
      return $this->direction;
    }

    /**
     * @param int $direction
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setDirection($direction)
    {
      $this->direction = $direction;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setDate($date)
    {
      $this->date = $date;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setSum($sum)
    {
      $this->sum = $sum;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setLotId($lotId)
    {
      $this->lotId = $lotId;
      return $this;
    }

    /**
     * @return CashGetTransfersResponseDataRecordService
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param CashGetTransfersResponseDataRecordService $service
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvatarName()
    {
      return $this->avatarName;
    }

    /**
     * @param string $avatarName
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setAvatarName($avatarName)
    {
      $this->avatarName = $avatarName;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageLotName()
    {
      return $this->imageLotName;
    }

    /**
     * @param string $imageLotName
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersResponseDataRecord
     */
    public function setImageLotName($imageLotName)
    {
      $this->imageLotName = $imageLotName;
      return $this;
    }

}
