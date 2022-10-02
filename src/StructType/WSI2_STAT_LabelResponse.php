<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_STAT_LabelResponse StructType
 * @subpackage Structs
 */
class WSI2_STAT_LabelResponse extends AbstractStructBase
{
    /**
     * The WSI2_STAT_LabelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WSI2_STAT_LabelResult;
    /**
     * Constructor method for WSI2_STAT_LabelResponse
     * @uses WSI2_STAT_LabelResponse::setWSI2_STAT_LabelResult()
     * @param string $wSI2_STAT_LabelResult
     */
    public function __construct($wSI2_STAT_LabelResult = null)
    {
        $this
            ->setWSI2_STAT_LabelResult($wSI2_STAT_LabelResult);
    }
    /**
     * Get WSI2_STAT_LabelResult value
     * @return string|null
     */
    public function getWSI2_STAT_LabelResult()
    {
        return $this->WSI2_STAT_LabelResult;
    }
    /**
     * Set WSI2_STAT_LabelResult value
     * @param string $wSI2_STAT_LabelResult
     * @return \MondialRelay\StructType\WSI2_STAT_LabelResponse
     */
    public function setWSI2_STAT_LabelResult($wSI2_STAT_LabelResult = null)
    {
        // validation for constraint: string
        if (!is_null($wSI2_STAT_LabelResult) && !is_string($wSI2_STAT_LabelResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wSI2_STAT_LabelResult, true), gettype($wSI2_STAT_LabelResult)), __LINE__);
        }
        $this->WSI2_STAT_LabelResult = $wSI2_STAT_LabelResult;
        return $this;
    }
}
