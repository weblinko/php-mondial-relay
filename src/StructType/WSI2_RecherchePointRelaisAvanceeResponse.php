<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_RecherchePointRelaisAvanceeResponse StructType
 * @subpackage Structs
 */
class WSI2_RecherchePointRelaisAvanceeResponse extends AbstractStructBase
{
    /**
     * The WSI2_RecherchePointRelaisAvanceeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisAvancee
     */
    public $WSI2_RecherchePointRelaisAvanceeResult;
    /**
     * Constructor method for WSI2_RecherchePointRelaisAvanceeResponse
     * @uses WSI2_RecherchePointRelaisAvanceeResponse::setWSI2_RecherchePointRelaisAvanceeResult()
     * @param \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisAvancee $wSI2_RecherchePointRelaisAvanceeResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisAvancee $wSI2_RecherchePointRelaisAvanceeResult = null)
    {
        $this
            ->setWSI2_RecherchePointRelaisAvanceeResult($wSI2_RecherchePointRelaisAvanceeResult);
    }
    /**
     * Get WSI2_RecherchePointRelaisAvanceeResult value
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisAvancee|null
     */
    public function getWSI2_RecherchePointRelaisAvanceeResult()
    {
        return $this->WSI2_RecherchePointRelaisAvanceeResult;
    }
    /**
     * Set WSI2_RecherchePointRelaisAvanceeResult value
     * @param \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisAvancee $wSI2_RecherchePointRelaisAvanceeResult
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvanceeResponse
     */
    public function setWSI2_RecherchePointRelaisAvanceeResult(\MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisAvancee $wSI2_RecherchePointRelaisAvanceeResult = null)
    {
        $this->WSI2_RecherchePointRelaisAvanceeResult = $wSI2_RecherchePointRelaisAvanceeResult;
        return $this;
    }
}
