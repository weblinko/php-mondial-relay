<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_STAT_Label StructType
 * @subpackage Structs
 */
class WSI2_STAT_Label extends AbstractStructBase
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
     * The STAT_ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $STAT_ID;
    /**
     * The Langue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Langue;
    /**
     * The Security
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Security;
    /**
     * Constructor method for WSI2_STAT_Label
     * @uses WSI2_STAT_Label::setEnseigne()
     * @uses WSI2_STAT_Label::setSTAT_ID()
     * @uses WSI2_STAT_Label::setLangue()
     * @uses WSI2_STAT_Label::setSecurity()
     * @param string $enseigne
     * @param string $sTAT_ID
     * @param string $langue
     * @param string $security
     */
    public function __construct($enseigne = null, $sTAT_ID = null, $langue = null, $security = null)
    {
        $this
            ->setEnseigne($enseigne)
            ->setSTAT_ID($sTAT_ID)
            ->setLangue($langue)
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
     * @return \MondialRelay\StructType\WSI2_STAT_Label
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
     * Get STAT_ID value
     * @return string|null
     */
    public function getSTAT_ID()
    {
        return $this->STAT_ID;
    }
    /**
     * Set STAT_ID value
     * @param string $sTAT_ID
     * @return \MondialRelay\StructType\WSI2_STAT_Label
     */
    public function setSTAT_ID($sTAT_ID = null)
    {
        // validation for constraint: string
        if (!is_null($sTAT_ID) && !is_string($sTAT_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTAT_ID, true), gettype($sTAT_ID)), __LINE__);
        }
        $this->STAT_ID = $sTAT_ID;
        return $this;
    }
    /**
     * Get Langue value
     * @return string|null
     */
    public function getLangue()
    {
        return $this->Langue;
    }
    /**
     * Set Langue value
     * @param string $langue
     * @return \MondialRelay\StructType\WSI2_STAT_Label
     */
    public function setLangue($langue = null)
    {
        // validation for constraint: string
        if (!is_null($langue) && !is_string($langue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($langue, true), gettype($langue)), __LINE__);
        }
        $this->Langue = $langue;
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
     * @return \MondialRelay\StructType\WSI2_STAT_Label
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
