<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class stringArray
{

    /**
     * @var string[] $stringArray
     */
    protected $stringArray = null;

    /**
     * @param string[] $stringArray
     */
    public function __construct(array $stringArray)
    {
      $this->stringArray = $stringArray;
    }

    /**
     * @return string[]
     */
    public function getStringArray()
    {
      return $this->stringArray;
    }

    /**
     * @param string[] $stringArray
     * @return \Sakhnovkrg\Wooppay\WSDL\stringArray
     */
    public function setStringArray(array $stringArray)
    {
      $this->stringArray = $stringArray;
      return $this;
    }

}