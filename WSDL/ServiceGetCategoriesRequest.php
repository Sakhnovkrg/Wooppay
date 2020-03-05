<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class ServiceGetCategoriesRequest
{

    /**
     * @var int $parent
     */
    protected $parent = null;

    /**
     * @var string $modify_date
     */
    protected $modify_date = null;

    /**
     * @param int $parent
     * @param string $modify_date
     */
    public function __construct($parent, $modify_date)
    {
      $this->parent = $parent;
      $this->modify_date = $modify_date;
    }

    /**
     * @return int
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param int $parent
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesRequest
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return string
     */
    public function getModify_date()
    {
      return $this->modify_date;
    }

    /**
     * @param string $modify_date
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesRequest
     */
    public function setModify_date($modify_date)
    {
      $this->modify_date = $modify_date;
      return $this;
    }

}
