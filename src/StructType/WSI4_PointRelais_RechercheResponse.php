<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI4_PointRelais_RechercheResponse StructType
 * @subpackage Structs
 */
class WSI4_PointRelais_RechercheResponse extends AbstractStructBase
{
    /**
     * The WSI4_PointRelais_RechercheResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche
     */
    public $WSI4_PointRelais_RechercheResult;
    /**
     * Constructor method for WSI4_PointRelais_RechercheResponse
     * @uses WSI4_PointRelais_RechercheResponse::setWSI4_PointRelais_RechercheResult()
     * @param \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI4_PointRelais_RechercheResult
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI4_PointRelais_RechercheResult = null)
    {
        $this
            ->setWSI4_PointRelais_RechercheResult($wSI4_PointRelais_RechercheResult);
    }
    /**
     * Get WSI4_PointRelais_RechercheResult value
     * @return \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche|null
     */
    public function getWSI4_PointRelais_RechercheResult()
    {
        return $this->WSI4_PointRelais_RechercheResult;
    }
    /**
     * Set WSI4_PointRelais_RechercheResult value
     * @param \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI4_PointRelais_RechercheResult
     * @return \MondialRelay\StructType\WSI4_PointRelais_RechercheResponse
     */
    public function setWSI4_PointRelais_RechercheResult(\MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche $wSI4_PointRelais_RechercheResult = null)
    {
        $this->WSI4_PointRelais_RechercheResult = $wSI4_PointRelais_RechercheResult;
        return $this;
    }
}
