<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class intArrayCustom
{

    /**
     * @var int[] $intArray
     */
    protected $intArray = null;

    /**
     * @param int[] $intArray
     */
    public function __construct(array $intArray)
    {
      $this->intArray = $intArray;
    }

    /**
     * @return int[]
     */
    public function getIntArray()
    {
      return $this->intArray;
    }

    /**
     * @param int[] $intArray
     * @return \Sakhnovkrg\Wooppay\WSDL\intArray
     */
    public function setIntArray(array $intArray)
    {
      $this->intArray = $intArray;
      return $this;
    }

}
