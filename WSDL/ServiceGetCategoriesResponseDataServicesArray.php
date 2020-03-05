<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class ServiceGetCategoriesResponseDataServicesArray
{

    /**
     * @var ServiceGetCategoriesResponseDataServices[] $ServiceGetCategoriesResponseDataServicesArray
     */
    protected $ServiceGetCategoriesResponseDataServicesArray = null;

    /**
     * @param ServiceGetCategoriesResponseDataServices[] $ServiceGetCategoriesResponseDataServicesArray
     */
    public function __construct(array $ServiceGetCategoriesResponseDataServicesArray)
    {
      $this->ServiceGetCategoriesResponseDataServicesArray = $ServiceGetCategoriesResponseDataServicesArray;
    }

    /**
     * @return ServiceGetCategoriesResponseDataServices[]
     */
    public function getServiceGetCategoriesResponseDataServicesArray()
    {
      return $this->ServiceGetCategoriesResponseDataServicesArray;
    }

    /**
     * @param ServiceGetCategoriesResponseDataServices[] $ServiceGetCategoriesResponseDataServicesArray
     * @return \Sakhnovkrg\Wooppay\WSDL\ServiceGetCategoriesResponseDataServicesArray
     */
    public function setServiceGetCategoriesResponseDataServicesArray(array $ServiceGetCategoriesResponseDataServicesArray)
    {
      $this->ServiceGetCategoriesResponseDataServicesArray = $ServiceGetCategoriesResponseDataServicesArray;
      return $this;
    }

}
