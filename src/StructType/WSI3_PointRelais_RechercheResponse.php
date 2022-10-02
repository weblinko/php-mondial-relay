<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI3_PointRelais_RechercheResponse StructType
 * @subpackage Structs
 */
class WSI3_PointRelais_RechercheResponse extends AbstractStructBase
{
    /**
     * The WSI3_PointRelais_RechercheResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche
     */
    public $WSI3_PointRelais_RechercheResult;
    /**
     * Constructor method for WSI3_PointRelais_RechercheResponse
     * @uses WSI3_PointRelais_RechercheResponse::setWSI3_PointRelais_RechercheResult()
     * @param \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI3_PointRelais_RechercheResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI3_PointRelais_RechercheResult = null)
    {
        $this
            ->setWSI3_PointRelais_RechercheResult($wSI3_PointRelais_RechercheResult);
    }
    /**
     * Get WSI3_PointRelais_RechercheResult value
     * @return \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche|null
     */
    public function getWSI3_PointRelais_RechercheResult()
    {
        return $this->WSI3_PointRelais_RechercheResult;
    }
    /**
     * Set WSI3_PointRelais_RechercheResult value
     * @param \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI3_PointRelais_RechercheResult
     * @return \MondialRelay\StructType\WSI3_PointRelais_RechercheResponse
     */
    public function setWSI3_PointRelais_RechercheResult(\MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI3_PointRelais_RechercheResult = null)
    {
        $this->WSI3_PointRelais_RechercheResult = $wSI3_PointRelais_RechercheResult;
        return $this;
    }
}
