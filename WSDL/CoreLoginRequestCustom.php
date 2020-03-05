<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreLoginRequestCustom
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $captcha
     */
    protected $captcha = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $captcha
     */
    public function __construct($username, $password, $captcha)
    {
      $this->username = $username;
      $this->password = $password;
      $this->captcha = $captcha;
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
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginRequest
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginRequest
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaptcha()
    {
      return $this->captcha;
    }

    /**
     * @param string $captcha
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreLoginRequest
     */
    public function setCaptcha($captcha)
    {
      $this->captcha = $captcha;
      return $this;
    }

}
