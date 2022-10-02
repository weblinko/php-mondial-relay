<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_RecherchePointRelaisHorairesResponse StructType
 * @subpackage Structs
 */
class WSI2_RecherchePointRelaisHorairesResponse extends AbstractStructBase
{
    /**
     * The WSI2_RecherchePointRelaisHorairesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisHoraires
     */
    public $WSI2_RecherchePointRelaisHorairesResult;
    /**
     * Constructor method for WSI2_RecherchePointRelaisHorairesResponse
     * @uses WSI2_RecherchePointRelaisHorairesResponse::setWSI2_RecherchePointRelaisHorairesResult()
     * @param \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisHoraires $wSI2_RecherchePointRelaisHorairesResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisHoraires $wSI2_RecherchePointRelaisHorairesResult = null)
    {
        $this
            ->setWSI2_RecherchePointRelaisHorairesResult($wSI2_RecherchePointRelaisHorairesResult);
    }
    /**
     * Get WSI2_RecherchePointRelaisHorairesResult value
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisHoraires|null
     */
    public function getWSI2_RecherchePointRelaisHorairesResult()
    {
        return $this->WSI2_RecherchePointRelaisHorairesResult;
    }
    /**
     * Set WSI2_RecherchePointRelaisHorairesResult value
     * @param \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisHoraires $wSI2_RecherchePointRelaisHorairesResult
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisHorairesResponse
     */
    public function setWSI2_RecherchePointRelaisHorairesResult(\MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisHoraires $wSI2_RecherchePointRelaisHorairesResult = null)
    {
        $this->WSI2_RecherchePointRelaisHorairesResult = $wSI2_RecherchePointRelaisHorairesResult;
        return $this;
    }
}
