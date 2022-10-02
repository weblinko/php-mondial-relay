<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_RecherchePointRelaisHoraires StructType
 * @subpackage Structs
 */
class Ret_WSI2_RecherchePointRelaisHoraires extends Ret_
{
    /**
     * The ListePR
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires
     */
    public $ListePR;
    /**
     * Constructor method for ret_WSI2_RecherchePointRelaisHoraires
     * @uses Ret_WSI2_RecherchePointRelaisHoraires::setListePR()
     * @param \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires $listePR
     */
    public function __construct(\MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires $listePR = null)
    {
        $this
            ->setListePR($listePR);
    }
    /**
     * Get ListePR value
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires|null
     */
    public function getListePR()
    {
        return $this->ListePR;
    }
    /**
     * Set ListePR value
     * @param \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires $listePR
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelaisHoraires
     */
    public function setListePR(\MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires $listePR = null)
    {
        $this->ListePR = $listePR;
        return $this;
    }
}
