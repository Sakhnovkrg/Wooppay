<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CashGetTransfersRequest
{

    /**
     * @var int $page
     */
    protected $page = null;

    /**
     * @var int $perPage
     */
    protected $perPage = null;

    /**
     * @var intArray $statuses
     */
    protected $statuses = null;

    /**
     * @var intArray $types
     */
    protected $types = null;

    /**
     * @var int $direction
     */
    protected $direction = null;

    /**
     * @var boolean $reverse
     */
    protected $reverse = null;

    /**
     * @var string $secondSubject
     */
    protected $secondSubject = null;

    /**
     * @var string $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var string $dateTo
     */
    protected $dateTo = null;

    /**
     * @var int $lastChanged
     */
    protected $lastChanged = null;

    /**
     * @param int $page
     * @param int $perPage
     * @param intArray $statuses
     * @param intArray $types
     * @param int $direction
     * @param boolean $reverse
     * @param string $secondSubject
     * @param string $dateFrom
     * @param string $dateTo
     * @param int $lastChanged
     */
    public function __construct($page, $perPage, $statuses, $types, $direction, $reverse, $secondSubject, $dateFrom, $dateTo, $lastChanged)
    {
      $this->page = $page;
      $this->perPage = $perPage;
      $this->statuses = $statuses;
      $this->types = $types;
      $this->direction = $direction;
      $this->reverse = $reverse;
      $this->secondSubject = $secondSubject;
      $this->dateFrom = $dateFrom;
      $this->dateTo = $dateTo;
      $this->lastChanged = $lastChanged;
    }

    /**
     * @return int
     */
    public function getPage()
    {
      return $this->page;
    }

    /**
     * @param int $page
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setPage($page)
    {
      $this->page = $page;
      return $this;
    }

    /**
     * @return int
     */
    public function getPerPage()
    {
      return $this->perPage;
    }

    /**
     * @param int $perPage
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setPerPage($perPage)
    {
      $this->perPage = $perPage;
      return $this;
    }

    /**
     * @return intArray
     */
    public function getStatuses()
    {
      return $this->statuses;
    }

    /**
     * @param intArray $statuses
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setStatuses($statuses)
    {
      $this->statuses = $statuses;
      return $this;
    }

    /**
     * @return intArray
     */
    public function getTypes()
    {
      return $this->types;
    }

    /**
     * @param intArray $types
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setTypes($types)
    {
      $this->types = $types;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setDirection($direction)
    {
      $this->direction = $direction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReverse()
    {
      return $this->reverse;
    }

    /**
     * @param boolean $reverse
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setReverse($reverse)
    {
      $this->reverse = $reverse;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondSubject()
    {
      return $this->secondSubject;
    }

    /**
     * @param string $secondSubject
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setSecondSubject($secondSubject)
    {
      $this->secondSubject = $secondSubject;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
      return $this->dateFrom;
    }

    /**
     * @param string $dateFrom
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setDateFrom($dateFrom)
    {
      $this->dateFrom = $dateFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
      return $this->dateTo;
    }

    /**
     * @param string $dateTo
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setDateTo($dateTo)
    {
      $this->dateTo = $dateTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getLastChanged()
    {
      return $this->lastChanged;
    }

    /**
     * @param int $lastChanged
     * @return \Sakhnovkrg\Wooppay\WSDL\CashGetTransfersRequest
     */
    public function setLastChanged($lastChanged)
    {
      $this->lastChanged = $lastChanged;
      return $this;
    }

}
