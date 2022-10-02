<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_DetailPointRelaisResponse StructType
 * @subpackage Structs
 */
class WSI2_DetailPointRelaisResponse extends AbstractStructBase
{
    /**
     * The WSI2_DetailPointRelaisResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_DetailPointRelais
     */
    public $WSI2_DetailPointRelaisResult;
    /**
     * Constructor method for WSI2_DetailPointRelaisResponse
     * @uses WSI2_DetailPointRelaisResponse::setWSI2_DetailPointRelaisResult()
     * @param \MondialRelay\StructType\Ret_WSI2_DetailPointRelais $wSI2_DetailPointRelaisResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_DetailPointRelais $wSI2_DetailPointRelaisResult = null)
    {
        $this
            ->setWSI2_DetailPointRelaisResult($wSI2_DetailPointRelaisResult);
    }
    /**
     * Get WSI2_DetailPointRelaisResult value
     * @return \MondialRelay\StructType\Ret_WSI2_DetailPointRelais|null
     */
    public function getWSI2_DetailPointRelaisResult()
    {
        return $this->WSI2_DetailPointRelaisResult;
    }
    /**
     * Set WSI2_DetailPointRelaisResult value
     * @param \MondialRelay\StructType\Ret_WSI2_DetailPointRelais $wSI2_DetailPointRelaisResult
     * @return \MondialRelay\StructType\WSI2_DetailPointRelaisResponse
     */
    public function setWSI2_DetailPointRelaisResult(\MondialRelay\StructType\Ret_WSI2_DetailPointRelais $wSI2_DetailPointRelaisResult = null)
    {
        $this->WSI2_DetailPointRelaisResult = $wSI2_DetailPointRelaisResult;
        return $this;
    }
}
