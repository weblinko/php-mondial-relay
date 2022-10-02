<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI3_GetEtiquettes StructType
 * @subpackage Structs
 */
class Ret_WSI3_GetEtiquettes extends Ret_WSI2_GetEtiquettes
{
    /**
     * The URL_PDF_10x15
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL_PDF_10x15;
    /**
     * Constructor method for ret_WSI3_GetEtiquettes
     * @uses Ret_WSI3_GetEtiquettes::setURL_PDF_10x15()
     * @param string $uRL_PDF_10x15
     */
    public function __construct($uRL_PDF_10x15 = null)
    {
        $this
            ->setURL_PDF_10x15($uRL_PDF_10x15);
    }
    /**
     * Get uRL_PDFx15 value
     * @return uRL_PDFx15
     */
    public function getURL_PDF_10x15()
    {
        return $this->URL_PDF_10x15;
    }
    /**
     * Set uRL_PDFx15 value
     * @param uRL_PDFx15 $uRL_PDFx15
     * @return \MondialRelay\StructType\Ret_WSI3_GetEtiquettes
     */
    public function setURL_PDF_10x15($uRL_PDF_10x15 = null)
    {
        // validation for constraint: string
        if (!is_null($uRL_PDF_10x15) && !is_string($uRL_PDF_10x15)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL_PDF_10x15, true), gettype($uRL_PDF_10x15)), __LINE__);
        }
        $this->URL_PDF_10x15 = $uRL_PDF_10x15;
        return $this;
    }
}
