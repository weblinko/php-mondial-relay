<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_CreationExpeditionResponse StructType
 * @subpackage Structs
 */
class WSI2_CreationExpeditionResponse extends AbstractStructBase
{
    /**
     * The WSI2_CreationExpeditionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public $WSI2_CreationExpeditionResult;
    /**
     * Constructor method for WSI2_CreationExpeditionResponse
     * @uses WSI2_CreationExpeditionResponse::setWSI2_CreationExpeditionResult()
     * @param \MondialRelay\StructType\Ret_WSI2_CreationExpedition $wSI2_CreationExpeditionResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_CreationExpedition $wSI2_CreationExpeditionResult = null)
    {
        $this
            ->setWSI2_CreationExpeditionResult($wSI2_CreationExpeditionResult);
    }
    /**
     * Get WSI2_CreationExpeditionResult value
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition|null
     */
    public function getWSI2_CreationExpeditionResult()
    {
        return $this->WSI2_CreationExpeditionResult;
    }
    /**
     * Set WSI2_CreationExpeditionResult value
     * @param \MondialRelay\StructType\Ret_WSI2_CreationExpedition $wSI2_CreationExpeditionResult
     * @return \MondialRelay\StructType\WSI2_CreationExpeditionResponse
     */
    public function setWSI2_CreationExpeditionResult(\MondialRelay\StructType\Ret_WSI2_CreationExpedition $wSI2_CreationExpeditionResult = null)
    {
        $this->WSI2_CreationExpeditionResult = $wSI2_CreationExpeditionResult;
        return $this;
    }
}
