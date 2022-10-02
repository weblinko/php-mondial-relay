<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_CreationEtiquetteResponse StructType
 * @subpackage Structs
 */
class WSI2_CreationEtiquetteResponse extends AbstractStructBase
{
    /**
     * The WSI2_CreationEtiquetteResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_CreationEtiquette
     */
    public $WSI2_CreationEtiquetteResult;
    /**
     * Constructor method for WSI2_CreationEtiquetteResponse
     * @uses WSI2_CreationEtiquetteResponse::setWSI2_CreationEtiquetteResult()
     * @param \MondialRelay\StructType\Ret_WSI2_CreationEtiquette $wSI2_CreationEtiquetteResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_CreationEtiquette $wSI2_CreationEtiquetteResult = null)
    {
        $this
            ->setWSI2_CreationEtiquetteResult($wSI2_CreationEtiquetteResult);
    }
    /**
     * Get WSI2_CreationEtiquetteResult value
     * @return \MondialRelay\StructType\Ret_WSI2_CreationEtiquette|null
     */
    public function getWSI2_CreationEtiquetteResult()
    {
        return $this->WSI2_CreationEtiquetteResult;
    }
    /**
     * Set WSI2_CreationEtiquetteResult value
     * @param \MondialRelay\StructType\Ret_WSI2_CreationEtiquette $wSI2_CreationEtiquetteResult
     * @return \MondialRelay\StructType\WSI2_CreationEtiquetteResponse
     */
    public function setWSI2_CreationEtiquetteResult(\MondialRelay\StructType\Ret_WSI2_CreationEtiquette $wSI2_CreationEtiquetteResult = null)
    {
        $this->WSI2_CreationEtiquetteResult = $wSI2_CreationEtiquetteResult;
        return $this;
    }
}
