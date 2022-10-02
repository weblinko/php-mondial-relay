<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_TracingColisDetaille StructType
 * @subpackage Structs
 */
class WSI2_TracingColisDetaille extends AbstractStructBase
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
     * The Expedition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expedition;
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
     * Constructor method for WSI2_TracingColisDetaille
     * @uses WSI2_TracingColisDetaille::setEnseigne()
     * @uses WSI2_TracingColisDetaille::setExpedition()
     * @uses WSI2_TracingColisDetaille::setLangue()
     * @uses WSI2_TracingColisDetaille::setSecurity()
     * @param string $enseigne
     * @param string $expedition
     * @param string $langue
     * @param string $security
     */
    public function __construct($enseigne = null, $expedition = null, $langue = null, $security = null)
    {
        $this
            ->setEnseigne($enseigne)
            ->setExpedition($expedition)
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
     * @return \MondialRelay\StructType\WSI2_TracingColisDetaille
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
     * Get Expedition value
     * @return string|null
     */
    public function getExpedition()
    {
        return $this->Expedition;
    }
    /**
     * Set Expedition value
     * @param string $expedition
     * @return \MondialRelay\StructType\WSI2_TracingColisDetaille
     */
    public function setExpedition($expedition = null)
    {
        // validation for constraint: string
        if (!is_null($expedition) && !is_string($expedition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expedition, true), gettype($expedition)), __LINE__);
        }
        $this->Expedition = $expedition;
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
     * @return \MondialRelay\StructType\WSI2_TracingColisDetaille
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
     * @return \MondialRelay\StructType\WSI2_TracingColisDetaille
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
