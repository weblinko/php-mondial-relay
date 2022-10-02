<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_AdressePointRelais StructType
 * @subpackage Structs
 */
class WSI2_AdressePointRelais extends AbstractStructBase
{
    /**
     * The Enseigne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Enseigne;
    /**
     * The Num
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Num;
    /**
     * The Pays
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pays;
    /**
     * The Security
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Security;
    /**
     * Constructor method for WSI2_AdressePointRelais
     * @uses WSI2_AdressePointRelais::setEnseigne()
     * @uses WSI2_AdressePointRelais::setNum()
     * @uses WSI2_AdressePointRelais::setPays()
     * @uses WSI2_AdressePointRelais::setSecurity()
     * @param string $enseigne
     * @param string $num
     * @param string $pays
     * @param string $security
     */
    public function __construct($enseigne = null, $num = null, $pays = null, $security = null)
    {
        $this
            ->setEnseigne($enseigne)
            ->setNum($num)
            ->setPays($pays)
            ->setSecurity($security);
    }
    /**
     * Get Enseigne value
     * @return string|null
     */
    public function getEnseigne()
    {
        return $this->Enseigne;
    }
    /**
     * Set Enseigne value
     * @param string $enseigne
     * @return \MondialRelay\StructType\WSI2_AdressePointRelais
     */
    public function setEnseigne($enseigne = null)
    {
        // validation for constraint: string
        if (!is_null($enseigne) && !is_string($enseigne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enseigne, true), gettype($enseigne)), __LINE__);
        }
        $this->Enseigne = $enseigne;
        return $this;
    }
    /**
     * Get Num value
     * @return string|null
     */
    public function getNum()
    {
        return $this->Num;
    }
    /**
     * Set Num value
     * @param string $num
     * @return \MondialRelay\StructType\WSI2_AdressePointRelais
     */
    public function setNum($num = null)
    {
        // validation for constraint: string
        if (!is_null($num) && !is_string($num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($num, true), gettype($num)), __LINE__);
        }
        $this->Num = $num;
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
     * @return \MondialRelay\StructType\WSI2_AdressePointRelais
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
    /**
     * Get Security value
     * @return string|null
     */
    public function getSecurity()
    {
        return $this->Security;
    }
    /**
     * Set Security value
     * @param string $security
     * @return \MondialRelay\StructType\WSI2_AdressePointRelais
     */
    public function setSecurity($security = null)
    {
        // validation for constraint: string
        if (!is_null($security) && !is_string($security)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($security, true), gettype($security)), __LINE__);
        }
        $this->Security = $security;
        return $this;
    }
}
