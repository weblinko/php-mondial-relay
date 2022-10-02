<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_CreationEtiquette StructType
 * @subpackage Structs
 */
class Ret_WSI2_CreationEtiquette extends Ret_
{
    /**
     * The ExpeditionNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpeditionNum;
    /**
     * The URL_Etiquette
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL_Etiquette;
    /**
     * Constructor method for ret_WSI2_CreationEtiquette
     * @uses Ret_WSI2_CreationEtiquette::setExpeditionNum()
     * @uses Ret_WSI2_CreationEtiquette::setURL_Etiquette()
     * @param string $expeditionNum
     * @param string $uRL_Etiquette
     */
    public function __construct($expeditionNum = null, $uRL_Etiquette = null)
    {
        $this
            ->setExpeditionNum($expeditionNum)
            ->setURL_Etiquette($uRL_Etiquette);
    }
    /**
     * Get ExpeditionNum value
     * @return string|null
     */
    public function getExpeditionNum()
    {
        return $this->ExpeditionNum;
    }
    /**
     * Set ExpeditionNum value
     * @param string $expeditionNum
     * @return \MondialRelay\StructType\Ret_WSI2_CreationEtiquette
     */
    public function setExpeditionNum($expeditionNum = null)
    {
        // validation for constraint: string
        if (!is_null($expeditionNum) && !is_string($expeditionNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expeditionNum, true), gettype($expeditionNum)), __LINE__);
        }
        $this->ExpeditionNum = $expeditionNum;
        return $this;
    }
    /**
     * Get URL_Etiquette value
     * @return string|null
     */
    public function getURL_Etiquette()
    {
        return $this->URL_Etiquette;
    }
    /**
     * Set URL_Etiquette value
     * @param string $uRL_Etiquette
     * @return \MondialRelay\StructType\Ret_WSI2_CreationEtiquette
     */
    public function setURL_Etiquette($uRL_Etiquette = null)
    {
        // validation for constraint: string
        if (!is_null($uRL_Etiquette) && !is_string($uRL_Etiquette)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL_Etiquette, true), gettype($uRL_Etiquette)), __LINE__);
        }
        $this->URL_Etiquette = $uRL_Etiquette;
        return $this;
    }
}
