<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_RechercheCP StructType
 * @subpackage Structs
 */
class Ret_WSI2_RechercheCP extends Ret_
{
    /**
     * The Liste
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfCommune
     */
    public $Liste;
    /**
     * Constructor method for ret_WSI2_RechercheCP
     * @uses Ret_WSI2_RechercheCP::setListe()
     * @param \MondialRelay\ArrayType\ArrayOfCommune $liste
     */
    public function __construct(\MondialRelay\ArrayType\ArrayOfCommune $liste = null)
    {
        $this
            ->setListe($liste);
    }
    /**
     * Get Liste value
     * @return \MondialRelay\ArrayType\ArrayOfCommune|null
     */
    public function getListe()
    {
        return $this->Liste;
    }
    /**
     * Set Liste value
     * @param \MondialRelay\ArrayType\ArrayOfCommune $liste
     * @return \MondialRelay\StructType\Ret_WSI2_RechercheCP
     */
    public function setListe(\MondialRelay\ArrayType\ArrayOfCommune $liste = null)
    {
        $this->Liste = $liste;
        return $this;
    }
}
