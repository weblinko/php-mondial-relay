<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_GetEtiquettesResponse StructType
 * @subpackage Structs
 */
class WSI2_GetEtiquettesResponse extends AbstractStructBase
{
    /**
     * The WSI2_GetEtiquettesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_GetEtiquettes
     */
    public $WSI2_GetEtiquettesResult;
    /**
     * Constructor method for WSI2_GetEtiquettesResponse
     * @uses WSI2_GetEtiquettesResponse::setWSI2_GetEtiquettesResult()
     * @param \MondialRelay\StructType\Ret_WSI2_GetEtiquettes $wSI2_GetEtiquettesResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_GetEtiquettes $wSI2_GetEtiquettesResult = null)
    {
        $this
            ->setWSI2_GetEtiquettesResult($wSI2_GetEtiquettesResult);
    }
    /**
     * Get WSI2_GetEtiquettesResult value
     * @return \MondialRelay\StructType\Ret_WSI2_GetEtiquettes|null
     */
    public function getWSI2_GetEtiquettesResult()
    {
        return $this->WSI2_GetEtiquettesResult;
    }
    /**
     * Set WSI2_GetEtiquettesResult value
     * @param \MondialRelay\StructType\Ret_WSI2_GetEtiquettes $wSI2_GetEtiquettesResult
     * @return \MondialRelay\StructType\WSI2_GetEtiquettesResponse
     */
    public function setWSI2_GetEtiquettesResult(\MondialRelay\StructType\Ret_WSI2_GetEtiquettes $wSI2_GetEtiquettesResult = null)
    {
        $this->WSI2_GetEtiquettesResult = $wSI2_GetEtiquettesResult;
        return $this;
    }
}
