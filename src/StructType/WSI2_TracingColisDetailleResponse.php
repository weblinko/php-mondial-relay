<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_TracingColisDetailleResponse StructType
 * @subpackage Structs
 */
class WSI2_TracingColisDetailleResponse extends AbstractStructBase
{
    /**
     * The WSI2_TracingColisDetailleResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille
     */
    public $WSI2_TracingColisDetailleResult;
    /**
     * Constructor method for WSI2_TracingColisDetailleResponse
     * @uses WSI2_TracingColisDetailleResponse::setWSI2_TracingColisDetailleResult()
     * @param \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille $wSI2_TracingColisDetailleResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_TracingColisDetaille $wSI2_TracingColisDetailleResult = null)
    {
        $this
            ->setWSI2_TracingColisDetailleResult($wSI2_TracingColisDetailleResult);
    }
    /**
     * Get WSI2_TracingColisDetailleResult value
     * @return \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille|null
     */
    public function getWSI2_TracingColisDetailleResult()
    {
        return $this->WSI2_TracingColisDetailleResult;
    }
    /**
     * Set WSI2_TracingColisDetailleResult value
     * @param \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille $wSI2_TracingColisDetailleResult
     * @return \MondialRelay\StructType\WSI2_TracingColisDetailleResponse
     */
    public function setWSI2_TracingColisDetailleResult(\MondialRelay\StructType\Ret_WSI2_TracingColisDetaille $wSI2_TracingColisDetailleResult = null)
    {
        $this->WSI2_TracingColisDetailleResult = $wSI2_TracingColisDetailleResult;
        return $this;
    }
}
