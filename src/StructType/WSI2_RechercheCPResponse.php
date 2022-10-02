<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_RechercheCPResponse StructType
 * @subpackage Structs
 */
class WSI2_RechercheCPResponse extends AbstractStructBase
{
    /**
     * The WSI2_RechercheCPResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_RechercheCP
     */
    public $WSI2_RechercheCPResult;
    /**
     * Constructor method for WSI2_RechercheCPResponse
     * @uses WSI2_RechercheCPResponse::setWSI2_RechercheCPResult()
     * @param \MondialRelay\StructType\Ret_WSI2_RechercheCP $wSI2_RechercheCPResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_RechercheCP $wSI2_RechercheCPResult = null)
    {
        $this
            ->setWSI2_RechercheCPResult($wSI2_RechercheCPResult);
    }
    /**
     * Get WSI2_RechercheCPResult value
     * @return \MondialRelay\StructType\Ret_WSI2_RechercheCP|null
     */
    public function getWSI2_RechercheCPResult()
    {
        return $this->WSI2_RechercheCPResult;
    }
    /**
     * Set WSI2_RechercheCPResult value
     * @param \MondialRelay\StructType\Ret_WSI2_RechercheCP $wSI2_RechercheCPResult
     * @return \MondialRelay\StructType\WSI2_RechercheCPResponse
     */
    public function setWSI2_RechercheCPResult(\MondialRelay\StructType\Ret_WSI2_RechercheCP $wSI2_RechercheCPResult = null)
    {
        $this->WSI2_RechercheCPResult = $wSI2_RechercheCPResult;
        return $this;
    }
}
