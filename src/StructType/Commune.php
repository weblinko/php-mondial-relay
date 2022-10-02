<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commune StructType
 * @subpackage Structs
 */
class Commune extends AbstractStructBase
{
    /**
     * The CP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CP;
    /**
     * The Ville
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ville;
    /**
     * The Pays
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pays;
    /**
     * Constructor method for Commune
     * @uses Commune::setCP()
     * @uses Commune::setVille()
     * @uses Commune::setPays()
     * @param string $cP
     * @param string $ville
     * @param string $pays
     */
    public function __construct($cP = null, $ville = null, $pays = null)
    {
        $this
            ->setCP($cP)
            ->setVille($ville)
            ->setPays($pays);
    }
    /**
     * Get CP value
     * @return string|null
     */
    public function getCP()
    {
        return $this->CP;
    }
    /**
     * Set CP value
     * @param string $cP
     * @return \MondialRelay\StructType\Commune
     */
    public function setCP($cP = null)
    {
        // validation for constraint: string
        if (!is_null($cP) && !is_string($cP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cP, true), gettype($cP)), __LINE__);
        }
        $this->CP = $cP;
        return $this;
    }
    /**
     * Get Ville value
     * @return string|null
     */
    public function getVille()
    {
        return $this->Ville;
    }
    /**
     * Set Ville value
     * @param string $ville
     * @return \MondialRelay\StructType\Commune
     */
    public function setVille($ville = null)
    {
        // validation for constraint: string
        if (!is_null($ville) && !is_string($ville)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ville, true), gettype($ville)), __LINE__);
        }
        $this->Ville = $ville;
        return $this;
    }
    /**
     * Get Pays value
     * @return string|null
     */
    public function getPays()
    {
        return $this->Pays;
    }
    /**
     * Set Pays value
     * @param string $pays
     * @return \MondialRelay\StructType\Commune
     */
    public function setPays($pays = null)
    {
        // validation for constraint: string
        if (!is_null($pays) && !is_string($pays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pays, true), gettype($pays)), __LINE__);
        }
        $this->Pays = $pays;
        return $this;
    }
}
