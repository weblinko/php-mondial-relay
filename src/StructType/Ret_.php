<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_ StructType
 * @subpackage Structs
 */
class Ret_ extends AbstractStructBase
{
    /**
     * The STAT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $STAT;
    /**
     * Constructor method for ret_
     * @uses Ret_::setSTAT()
     * @param string $sTAT
     */
    public function __construct($sTAT = null)
    {
        $this
            ->setSTAT($sTAT);
    }
    /**
     * Get STAT value
     * @return string|null
     */
    public function getSTAT()
    {
        return $this->STAT;
    }
    /**
     * Set STAT value
     * @param string $sTAT
     * @return \MondialRelay\StructType\Ret_
     */
    public function setSTAT($sTAT = null)
    {
        // validation for constraint: string
        if (!is_null($sTAT) && !is_string($sTAT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTAT, true), gettype($sTAT)), __LINE__);
        }
        $this->STAT = $sTAT;
        return $this;
    }
}
