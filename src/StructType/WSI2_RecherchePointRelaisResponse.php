<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_RecherchePointRelaisResponse StructType
 * @subpackage Structs
 */
class WSI2_RecherchePointRelaisResponse extends AbstractStructBase
{
    /**
     * The WSI2_RecherchePointRelaisResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public $WSI2_RecherchePointRelaisResult;
    /**
     * Constructor method for WSI2_RecherchePointRelaisResponse
     * @uses WSI2_RecherchePointRelaisResponse::setWSI2_RecherchePointRelaisResult()
     * @param \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais $wSI2_RecherchePointRelaisResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_RecherchePointRelais $wSI2_RecherchePointRelaisResult = null)
    {
        $this
            ->setWSI2_RecherchePointRelaisResult($wSI2_RecherchePointRelaisResult);
    }
    /**
     * Get WSI2_RecherchePointRelaisResult value
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais|null
     */
    public function getWSI2_RecherchePointRelaisResult()
    {
        return $this->WSI2_RecherchePointRelaisResult;
    }
    /**
     * Set WSI2_RecherchePointRelaisResult value
     * @param \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais $wSI2_RecherchePointRelaisResult
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisResponse
     */
    public function setWSI2_RecherchePointRelaisResult(\MondialRelay\StructType\Ret_WSI2_RecherchePointRelais $wSI2_RecherchePointRelaisResult = null)
    {
        $this->WSI2_RecherchePointRelaisResult = $wSI2_RecherchePointRelaisResult;
        return $this;
    }
}
