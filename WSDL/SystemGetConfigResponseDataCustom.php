<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class SystemGetConfigResponseDataCustom
{

    /**
     * @var string $avatarsRoot
     */
    protected $avatarsRoot = null;

    /**
     * @var string $servicePicturesRoot
     */
    protected $servicePicturesRoot = null;

    /**
     * @var string $serviceMenuPicturesRoot
     */
    protected $serviceMenuPicturesRoot = null;

    /**
     * @var string $lotPicturesRoot
     */
    protected $lotPicturesRoot = null;

    /**
     * @var string $placePicturesRoot
     */
    protected $placePicturesRoot = null;

    /**
     * @param string $avatarsRoot
     * @param string $servicePicturesRoot
     * @param string $serviceMenuPicturesRoot
     * @param string $lotPicturesRoot
     * @param string $placePicturesRoot
     */
    public function __construct($avatarsRoot, $servicePicturesRoot, $serviceMenuPicturesRoot, $lotPicturesRoot, $placePicturesRoot)
    {
      $this->avatarsRoot = $avatarsRoot;
      $this->servicePicturesRoot = $servicePicturesRoot;
      $this->serviceMenuPicturesRoot = $serviceMenuPicturesRoot;
      $this->lotPicturesRoot = $lotPicturesRoot;
      $this->placePicturesRoot = $placePicturesRoot;
    }

    /**
     * @return string
     */
    public function getAvatarsRoot()
    {
      return $this->avatarsRoot;
    }

    /**
     * @param string $avatarsRoot
     * @return \Sakhnovkrg\Wooppay\WSDL\SystemGetConfigResponseData
     */
    public function setAvatarsRoot($avatarsRoot)
    {
      $this->avatarsRoot = $avatarsRoot;
      return $this;
    }

    /**
     * @return string
     */
    public function getServicePicturesRoot()
    {
      return $this->servicePicturesRoot;
    }

    /**
     * @param string $servicePicturesRoot
     * @return \Sakhnovkrg\Wooppay\WSDL\SystemGetConfigResponseData
     */
    public function setServicePicturesRoot($servicePicturesRoot)
    {
      $this->servicePicturesRoot = $servicePicturesRoot;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceMenuPicturesRoot()
    {
      return $this->serviceMenuPicturesRoot;
    }

    /**
     * @param string $serviceMenuPicturesRoot
     * @return \Sakhnovkrg\Wooppay\WSDL\SystemGetConfigResponseData
     */
    public function setServiceMenuPicturesRoot($serviceMenuPicturesRoot)
    {
      $this->serviceMenuPicturesRoot = $serviceMenuPicturesRoot;
      return $this;
    }

    /**
     * @return string
     */
    public function getLotPicturesRoot()
    {
      return $this->lotPicturesRoot;
    }

    /**
     * @param string $lotPicturesRoot
     * @return \Sakhnovkrg\Wooppay\WSDL\SystemGetConfigResponseData
     */
    public function setLotPicturesRoot($lotPicturesRoot)
    {
      $this->lotPicturesRoot = $lotPicturesRoot;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlacePicturesRoot()
    {
      return $this->placePicturesRoot;
    }

    /**
     * @param string $placePicturesRoot
     * @return \Sakhnovkrg\Wooppay\WSDL\SystemGetConfigResponseData
     */
    public function setPlacePicturesRoot($placePicturesRoot)
    {
      $this->placePicturesRoot = $placePicturesRoot;
      return $this;
    }

}
