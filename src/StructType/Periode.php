<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Periode StructType
 * @subpackage Structs
 */
class Periode extends AbstractStructBase
{
    /**
     * The Debut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Debut;
    /**
     * The Fin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Fin;
    /**
     * Constructor method for Periode
     * @uses Periode::setDebut()
     * @uses Periode::setFin()
     * @param string $debut
     * @param string $fin
     */
    public function __construct($debut = null, $fin = null)
    {
        $this
            ->setDebut($debut)
            ->setFin($fin);
    }
    /**
     * Get Debut value
     * @return string
     */
    public function getDebut()
    {
        return $this->Debut;
    }
    /**
     * Set Debut value
     * @param string $debut
     * @return \MondialRelay\StructType\Periode
     */
    public function setDebut($debut = null)
    {
        // validation for constraint: string
        if (!is_null($debut) && !is_string($debut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debut, true), gettype($debut)), __LINE__);
        }
        $this->Debut = $debut;
        return $this;
    }
    /**
     * Get Fin value
     * @return string
     */
    public function getFin()
    {
        return $this->Fin;
    }
    /**
     * Set Fin value
     * @param string $fin
     * @return \MondialRelay\StructType\Periode
     */
    public function setFin($fin = null)
    {
        // validation for constraint: string
        if (!is_null($fin) && !is_string($fin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fin, true), gettype($fin)), __LINE__);
        }
        $this->Fin = $fin;
        return $this;
    }
}
