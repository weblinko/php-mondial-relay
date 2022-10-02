<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI3_PointRelais_Recherche StructType
 * @subpackage Structs
 */
class Ret_WSI3_PointRelais_Recherche extends Ret_
{
    /**
     * The PointsRelais
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfPointRelais_Details
     */
    public $PointsRelais;
    /**
     * Constructor method for ret_WSI3_PointRelais_Recherche
     * @uses Ret_WSI3_PointRelais_Recherche::setPointsRelais()
     * @param \MondialRelay\ArrayType\ArrayOfPointRelais_Details $pointsRelais
     */
    public function __construct(\MondialRelay\ArrayType\ArrayOfPointRelais_Details $pointsRelais = null)
    {
        $this
            ->setPointsRelais($pointsRelais);
    }
    /**
     * Get PointsRelais value
     * @return \MondialRelay\ArrayType\ArrayOfPointRelais_Details|null
     */
    public function getPointsRelais()
    {
        return $this->PointsRelais;
    }
    /**
     * Set PointsRelais value
     * @param \MondialRelay\ArrayType\ArrayOfPointRelais_Details $pointsRelais
     * @return \MondialRelay\StructType\Ret_WSI3_PointRelais_Recherche
     */
    public function setPointsRelais(\MondialRelay\ArrayType\ArrayOfPointRelais_Details $pointsRelais = null)
    {
        $this->PointsRelais = $pointsRelais;
        return $this;
    }
}
