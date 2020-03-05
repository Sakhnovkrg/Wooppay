<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class ServiceGetCategoriesResponseDataServicesCustom
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $merchant
     */
    protected $merchant = null;

    /**
     * @var string $service_name
     */
    protected $service_name = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $picture
     */
    protected $picture = null;

    /**
     * @var stringArray $synonyms
     */
    protected $synonyms = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param int $id
     * @param string $merchant
     * @param string $service_name
     * @param string $name
     * @param string $picture
     * @param stringArray $synonyms
     * @param string $description
     */
    public function __construct($id, $merchant, $service_name, $name, $picture, $synonyms, $description)
    {
      $this->id = $id;
      $this->merchant = $merchant;
      $this->service_name = $service_name;
      $this->name = $name;
      $this->picture = $picture;
      $this->synonyms = $synonyms;
      $this->description = $description;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServices
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchant()
    {
      return $this->merchant;
    }

    /**
     * @param string $merchant
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServices
     */
    public function setMerchant($merchant)
    {
      $this->merchant = $merchant;
      return $this;
    }

    /**
     * @return string
     */
    public function getService_name()
    {
      return $this->service_name;
    }

    /**
     * @param string $service_name
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServices
     */
    public function setService_name($service_name)
    {
      $this->service_name = $service_name;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServices
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServices
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
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServices
     */
    public function setSynonyms($synonyms)
    {
      $this->synonyms = $synonyms;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServices
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
