<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreUserSearchResponseDataCustom
{

    /**
     * @var string $subject_name
     */
    protected $subject_name = null;

    /**
     * @var string $avatarName
     */
    protected $avatarName = null;

    /**
     * @param string $subject_name
     * @param string $avatarName
     */
    public function __construct($subject_name, $avatarName)
    {
      $this->subject_name = $subject_name;
      $this->avatarName = $avatarName;
    }

    /**
     * @return string
     */
    public function getSubject_name()
    {
      return $this->subject_name;
    }

    /**
     * @param string $subject_name
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreUserSearchResponseData
     */
    public function setSubject_name($subject_name)
    {
      $this->subject_name = $subject_name;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreUserSearchResponseData
     */
    public function setAvatarName($avatarName)
    {
      $this->avatarName = $avatarName;
      return $this;
    }

}
