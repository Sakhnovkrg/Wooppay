<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class ServiceGetCategoriesResponseDataCategoriesCustom
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $parent_id
     */
    protected $parent_id = null;

    /**
     * @var string $picture
     */
    protected $picture = null;

    /**
     * @var stringArray $synonyms
     */
    protected $synonyms = null;

    /**
     * @var ServiceGetCategoriesResponseDataServicesArray $services
     */
    protected $services = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $parent_id
     * @param string $picture
     * @param stringArray $synonyms
     * @param ServiceGetCategoriesResponseDataServicesArray $services
     */
    public function __construct($id, $name, $parent_id, $picture, $synonyms, $services)
    {
      $this->id = $id;
      $this->name = $name;
      $this->parent_id = $parent_id;
      $this->picture = $picture;
      $this->synonyms = $synonyms;
      $this->services = $services;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataCategories
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataCategories
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getParent_id()
    {
      return $this->parent_id;
    }

    /**
     * @param int $parent_id
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataCategories
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
      return $this->picture;
    }

    /**
     * @param string $picture
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataCategories
     */
    public function setPicture($picture)
    {
      $this->picture = $picture;
      return $this;
    }

    /**
     * @return stringArray
     */
    public function getSynonyms()
    {
      return $this->synonyms;
    }

    /**
     * @param stringArray $synonyms
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataCategories
     */
    public function setSynonyms($synonyms)
    {
      $this->synonyms = $synonyms;
      return $this;
    }

    /**
     * @return ServiceGetCategoriesResponseDataServicesArray
     */
    public function getServices()
    {
      return $this->services;
    }

    /**
     * @param ServiceGetCategoriesResponseDataServicesArray $services
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataCategories
     */
    public function setServices($services)
    {
      $this->services = $services;
      return $this;
    }

}
