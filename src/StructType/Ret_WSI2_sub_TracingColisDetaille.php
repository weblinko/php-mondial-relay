<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_sub_TracingColisDetaille StructType
 * @subpackage Structs
 */
class Ret_WSI2_sub_TracingColisDetaille extends AbstractStructBase
{
    /**
     * The Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Libelle;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The Heure
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Heure;
    /**
     * The Emplacement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Emplacement;
    /**
     * The Relais_Num
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Relais_Num;
    /**
     * The Relais_Pays
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Relais_Pays;
    /**
     * Constructor method for ret_WSI2_sub_TracingColisDetaille
     * @uses Ret_WSI2_sub_TracingColisDetaille::setLibelle()
     * @uses Ret_WSI2_sub_TracingColisDetaille::setDate()
     * @uses Ret_WSI2_sub_TracingColisDetaille::setHeure()
     * @uses Ret_WSI2_sub_TracingColisDetaille::setEmplacement()
     * @uses Ret_WSI2_sub_TracingColisDetaille::setRelais_Num()
     * @uses Ret_WSI2_sub_TracingColisDetaille::setRelais_Pays()
     * @param string $libelle
     * @param string $date
     * @param string $heure
     * @param string $emplacement
     * @param string $relais_Num
     * @param string $relais_Pays
     */
    public function __construct($libelle = null, $date = null, $heure = null, $emplacement = null, $relais_Num = null, $relais_Pays = null)
    {
        $this
            ->setLibelle($libelle)
            ->setDate($date)
            ->setHeure($heure)
            ->setEmplacement($emplacement)
            ->setRelais_Num($relais_Num)
            ->setRelais_Pays($relais_Pays);
    }
    /**
     * Get Libelle value
     * @return string|null
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }
    /**
     * Set Libelle value
     * @param string $libelle
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille
     */
    public function setLibelle($libelle = null)
    {
        // validation for constraint: string
        if (!is_null($libelle) && !is_string($libelle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelle, true), gettype($libelle)), __LINE__);
        }
        $this->Libelle = $libelle;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Heure value
     * @return string|null
     */
    public function getHeure()
    {
        return $this->Heure;
    }
    /**
     * Set Heure value
     * @param string $heure
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille
     */
    public function setHeure($heure = null)
    {
        // validation for constraint: string
        if (!is_null($heure) && !is_string($heure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($heure, true), gettype($heure)), __LINE__);
        }
        $this->Heure = $heure;
        return $this;
    }
    /**
     * Get Emplacement value
     * @return string|null
     */
    public function getEmplacement()
    {
        return $this->Emplacement;
    }
    /**
     * Set Emplacement value
     * @param string $emplacement
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille
     */
    public function setEmplacement($emplacement = null)
    {
        // validation for constraint: string
        if (!is_null($emplacement) && !is_string($emplacement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emplacement, true), gettype($emplacement)), __LINE__);
        }
        $this->Emplacement = $emplacement;
        return $this;
    }
    /**
     * Get Relais_Num value
     * @return string|null
     */
    public function getRelais_Num()
    {
        return $this->Relais_Num;
    }
    /**
     * Set Relais_Num value
     * @param string $relais_Num
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille
     */
    public function setRelais_Num($relais_Num = null)
    {
        // validation for constraint: string
        if (!is_null($relais_Num) && !is_string($relais_Num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relais_Num, true), gettype($relais_Num)), __LINE__);
        }
        $this->Relais_Num = $relais_Num;
        return $this;
    }
    /**
     * Get Relais_Pays value
     * @return string|null
     */
    public function getRelais_Pays()
    {
        return $this->Relais_Pays;
    }
    /**
     * Set Relais_Pays value
     * @param string $relais_Pays
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille
     */
    public function setRelais_Pays($relais_Pays = null)
    {
        // validation for constraint: string
        if (!is_null($relais_Pays) && !is_string($relais_Pays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relais_Pays, true), gettype($relais_Pays)), __LINE__);
        }
        $this->Relais_Pays = $relais_Pays;
        return $this;
    }
}
