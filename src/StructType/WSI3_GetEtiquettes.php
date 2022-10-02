<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI3_GetEtiquettes StructType
 * @subpackage Structs
 */
class WSI3_GetEtiquettes extends AbstractStructBase
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
     * The Expeditions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expeditions;
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
     * Constructor method for WSI3_GetEtiquettes
     * @uses WSI3_GetEtiquettes::setEnseigne()
     * @uses WSI3_GetEtiquettes::setExpeditions()
     * @uses WSI3_GetEtiquettes::setLangue()
     * @uses WSI3_GetEtiquettes::setSecurity()
     * @param string $enseigne
     * @param string $expeditions
     * @param string $langue
     * @param string $security
     */
    public function __construct($enseigne = null, $expeditions = null, $langue = null, $security = null)
    {
        $this
            ->setEnseigne($enseigne)
            ->setExpeditions($expeditions)
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
     * @return \MondialRelay\StructType\WSI3_GetEtiquettes
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
     * Get Expeditions value
     * @return string|null
     */
    public function getExpeditions()
    {
        return $this->Expeditions;
    }
    /**
     * Set Expeditions value
     * @param string $expeditions
     * @return \MondialRelay\StructType\WSI3_GetEtiquettes
     */
    public function setExpeditions($expeditions = null)
    {
        // validation for constraint: string
        if (!is_null($expeditions) && !is_string($expeditions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expeditions, true), gettype($expeditions)), __LINE__);
        }
        $this->Expeditions = $expeditions;
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
     * @return \MondialRelay\StructType\WSI3_GetEtiquettes
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
     * @return \MondialRelay\StructType\WSI3_GetEtiquettes
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
