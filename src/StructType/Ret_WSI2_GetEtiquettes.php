<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_GetEtiquettes StructType
 * @subpackage Structs
 */
class Ret_WSI2_GetEtiquettes extends Ret_
{
    /**
     * The URL_PDF_A4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL_PDF_A4;
    /**
     * The URL_PDF_A5
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL_PDF_A5;
    /**
     * Constructor method for ret_WSI2_GetEtiquettes
     * @uses Ret_WSI2_GetEtiquettes::setURL_PDF_A4()
     * @uses Ret_WSI2_GetEtiquettes::setURL_PDF_A5()
     * @param string $uRL_PDF_A4
     * @param string $uRL_PDF_A5
     */
    public function __construct($uRL_PDF_A4 = null, $uRL_PDF_A5 = null)
    {
        $this
            ->setURL_PDF_A4($uRL_PDF_A4)
            ->setURL_PDF_A5($uRL_PDF_A5);
    }
    /**
     * Get URL_PDF_A4 value
     * @return string|null
     */
    public function getURL_PDF_A4()
    {
        return $this->URL_PDF_A4;
    }
    /**
     * Set URL_PDF_A4 value
     * @param string $uRL_PDF_A4
     * @return \MondialRelay\StructType\Ret_WSI2_GetEtiquettes
     */
    public function setURL_PDF_A4($uRL_PDF_A4 = null)
    {
        // validation for constraint: string
        if (!is_null($uRL_PDF_A4) && !is_string($uRL_PDF_A4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL_PDF_A4, true), gettype($uRL_PDF_A4)), __LINE__);
        }
        $this->URL_PDF_A4 = $uRL_PDF_A4;
        return $this;
    }
    /**
     * Get URL_PDF_A5 value
     * @return string|null
     */
    public function getURL_PDF_A5()
    {
        return $this->URL_PDF_A5;
    }
    /**
     * Set URL_PDF_A5 value
     * @param string $uRL_PDF_A5
     * @return \MondialRelay\StructType\Ret_WSI2_GetEtiquettes
     */
    public function setURL_PDF_A5($uRL_PDF_A5 = null)
    {
        // validation for constraint: string
        if (!is_null($uRL_PDF_A5) && !is_string($uRL_PDF_A5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL_PDF_A5, true), gettype($uRL_PDF_A5)), __LINE__);
        }
        $this->URL_PDF_A5 = $uRL_PDF_A5;
        return $this;
    }
}
