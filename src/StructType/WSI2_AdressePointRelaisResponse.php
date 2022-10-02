<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_AdressePointRelaisResponse StructType
 * @subpackage Structs
 */
class WSI2_AdressePointRelaisResponse extends AbstractStructBase
{
    /**
     * The WSI2_AdressePointRelaisResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_AdressePointRelais
     */
    public $WSI2_AdressePointRelaisResult;
    /**
     * Constructor method for WSI2_AdressePointRelaisResponse
     * @uses WSI2_AdressePointRelaisResponse::setWSI2_AdressePointRelaisResult()
     * @param \MondialRelay\StructType\Ret_WSI2_AdressePointRelais $wSI2_AdressePointRelaisResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_AdressePointRelais $wSI2_AdressePointRelaisResult = null)
    {
        $this
            ->setWSI2_AdressePointRelaisResult($wSI2_AdressePointRelaisResult);
    }
    /**
     * Get WSI2_AdressePointRelaisResult value
     * @return \MondialRelay\StructType\Ret_WSI2_AdressePointRelais|null
     */
    public function getWSI2_AdressePointRelaisResult()
    {
        return $this->WSI2_AdressePointRelaisResult;
    }
    /**
     * Set WSI2_AdressePointRelaisResult value
     * @param \MondialRelay\StructType\Ret_WSI2_AdressePointRelais $wSI2_AdressePointRelaisResult
     * @return \MondialRelay\StructType\WSI2_AdressePointRelaisResponse
     */
    public function setWSI2_AdressePointRelaisResult(\MondialRelay\StructType\Ret_WSI2_AdressePointRelais $wSI2_AdressePointRelaisResult = null)
    {
        $this->WSI2_AdressePointRelaisResult = $wSI2_AdressePointRelaisResult;
        return $this;
    }
}
