<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreUserExistsRequest
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var int $userGroup
     */
    protected $userGroup = null;

    /**
     * @param string $login
     * @param int $userGroup
     */
    public function __construct($login, $userGroup)
    {
      $this->login = $login;
      $this->userGroup = $userGroup;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreUserExistsRequest
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserGroup()
    {
      return $this->userGroup;
    }

    /**
     * @param int $userGroup
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreUserExistsRequest
     */
    public function setUserGroup($userGroup)
    {
      $this->userGroup = $userGroup;
      return $this;
    }

}
