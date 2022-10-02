<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI3_GetEtiquettesResponse StructType
 * @subpackage Structs
 */
class WSI3_GetEtiquettesResponse extends AbstractStructBase
{
    /**
     * The WSI3_GetEtiquettesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI3_GetEtiquettes
     */
    public $WSI3_GetEtiquettesResult;
    /**
     * Constructor method for WSI3_GetEtiquettesResponse
     * @uses WSI3_GetEtiquettesResponse::setWSI3_GetEtiquettesResult()
     * @param \MondialRelay\StructType\Ret_WSI3_GetEtiquettes $wSI3_GetEtiquettesResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI3_GetEtiquettes $wSI3_GetEtiquettesResult = null)
    {
        $this
            ->setWSI3_GetEtiquettesResult($wSI3_GetEtiquettesResult);
    }
    /**
     * Get WSI3_GetEtiquettesResult value
     * @return \MondialRelay\StructType\Ret_WSI3_GetEtiquettes|null
     */
    public function getWSI3_GetEtiquettesResult()
    {
        return $this->WSI3_GetEtiquettesResult;
    }
    /**
     * Set WSI3_GetEtiquettesResult value
     * @param \MondialRelay\StructType\Ret_WSI3_GetEtiquettes $wSI3_GetEtiquettesResult
     * @return \MondialRelay\StructType\WSI3_GetEtiquettesResponse
     */
    public function setWSI3_GetEtiquettesResult(\MondialRelay\StructType\Ret_WSI3_GetEtiquettes $wSI3_GetEtiquettesResult = null)
    {
        $this->WSI3_GetEtiquettesResult = $wSI3_GetEtiquettesResult;
        return $this;
    }
}
