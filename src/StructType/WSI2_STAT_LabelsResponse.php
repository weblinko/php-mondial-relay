<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_STAT_LabelsResponse StructType
 * @subpackage Structs
 */
class WSI2_STAT_LabelsResponse extends AbstractStructBase
{
    /**
     * The WSI2_STAT_LabelsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfArrayOfString
     */
    public $WSI2_STAT_LabelsResult;
    /**
     * Constructor method for WSI2_STAT_LabelsResponse
     * @uses WSI2_STAT_LabelsResponse::setWSI2_STAT_LabelsResult()
     * @param \MondialRelay\ArrayType\ArrayOfArrayOfString $wSI2_STAT_LabelsResult
     */
    public function __construct(\MondialRelay\ArrayType\ArrayOfArrayOfString $wSI2_STAT_LabelsResult = null)
    {
        $this
            ->setWSI2_STAT_LabelsResult($wSI2_STAT_LabelsResult);
    }
    /**
     * Get WSI2_STAT_LabelsResult value
     * @return \MondialRelay\ArrayType\ArrayOfArrayOfString|null
     */
    public function getWSI2_STAT_LabelsResult()
    {
        return $this->WSI2_STAT_LabelsResult;
    }
    /**
     * Set WSI2_STAT_LabelsResult value
     * @param \MondialRelay\ArrayType\ArrayOfArrayOfString $wSI2_STAT_LabelsResult
     * @return \MondialRelay\StructType\WSI2_STAT_LabelsResponse
     */
    public function setWSI2_STAT_LabelsResult(\MondialRelay\ArrayType\ArrayOfArrayOfString $wSI2_STAT_LabelsResult = null)
    {
        $this->WSI2_STAT_LabelsResult = $wSI2_STAT_LabelsResult;
        return $this;
    }
}
