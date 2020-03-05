<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreLoginResponseData
{

    /**
     * @var string $session
     */
    protected $session = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var stringArray $roles
     */
    protected $roles = null;

    /**
     * @param string $session
     * @param int $id
     * @param string $username
     * @param string $login
     * @param int $type
     * @param stringArray $roles
     */
    public function __construct($session, $id, $username, $login, $type, $roles)
    {
      $this->session = $session;
      $this->id = $id;
      $this->username = $username;
      $this->login = $login;
      $this->type = $type;
      $this->roles = $roles;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->session;
    }

    /**
     * @param string $session
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginResponseData
     */
    public function setSession($session)
    {
      $this->session = $session;
      return $this;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginResponseData
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginResponseData
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginResponseData
     */
    public function setLogin($login)
    {
      $this->login = $login;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginResponseData
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return stringArray
     */
    public function getRoles()
    {
      return $this->roles;
    }

    /**
     * @param stringArray $roles
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginResponseData
     */
    public function setRoles($roles)
    {
      $this->roles = $roles;
      return $this;
    }

}
