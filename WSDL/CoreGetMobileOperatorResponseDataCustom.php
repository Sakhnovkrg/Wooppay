<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class CoreGetMobileOperatorResponseDataCustom
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param string $operator
     * @param int $error_code
     */
    public function __construct($operator, $error_code)
    {
      $this->operator = $operator;
      $this->error_code = $error_code;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param string $operator
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetMobileOperatorResponseData
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return int
     */
    public function getError_code()
    {
      return $this->error_code;
    }

    /**
     * @param int $error_code
     * @return \Sakhnovkrg\Wooppay\WSDL\CoreGetMobileOperatorResponseData
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
