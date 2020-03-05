<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class ServiceGetCategoriesResponseDataCustom
{

    /**
     * @var ServiceGetCategoriesResponseDataCategoriesArray $categories
     */
    protected $categories = null;

    /**
     * @var string $modify_date
     */
    protected $modify_date = null;

    /**
     * @var int $no_update
     */
    protected $no_update = null;

    /**
     * @param ServiceGetCategoriesResponseDataCategoriesArray $categories
     * @param string $modify_date
     * @param int $no_update
     */
    public function __construct($categories, $modify_date, $no_update)
    {
      $this->categories = $categories;
      $this->modify_date = $modify_date;
      $this->no_update = $no_update;
    }

    /**
     * @return ServiceGetCategoriesResponseDataCategoriesArray
     */
    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * @param ServiceGetCategoriesResponseDataCategoriesArray $categories
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseData
     */
    public function setCategories($categories)
    {
      $this->categories = $categories;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseData
     */
    public function setModify_date($modify_date)
    {
      $this->modify_date = $modify_date;
      return $this;
    }

    /**
     * @return int
     */
    public function getNo_update()
    {
      return $this->no_update;
    }

    /**
     * @param int $no_update
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseData
     */
    public function setNo_update($no_update)
    {
      $this->no_update = $no_update;
      return $this;
    }

}
