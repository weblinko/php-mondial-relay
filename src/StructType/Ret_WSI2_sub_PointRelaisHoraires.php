<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_sub_PointRelaisHoraires StructType
 * @subpackage Structs
 */
class Ret_WSI2_sub_PointRelaisHoraires extends AbstractStructBase
{
    /**
     * The Num
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Num;
    /**
     * The LgAdr1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LgAdr1;
    /**
     * The LgAdr2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LgAdr2;
    /**
     * The LgAdr3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LgAdr3;
    /**
     * The LgAdr4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LgAdr4;
    /**
     * The CP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CP;
    /**
     * The Ville
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ville;
    /**
     * The Pays
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pays;
    /**
     * The Horaires_Lundi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $Horaires_Lundi;
    /**
     * The Horaires_Mardi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $Horaires_Mardi;
    /**
     * The Horaires_Mercredi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $Horaires_Mercredi;
    /**
     * The Horaires_Jeudi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $Horaires_Jeudi;
    /**
     * The Horaires_Vendredi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $Horaires_Vendredi;
    /**
     * The Horaires_Samedi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $Horaires_Samedi;
    /**
     * The Horaires_Dimanche
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $Horaires_Dimanche;
    /**
     * Constructor method for ret_WSI2_sub_PointRelaisHoraires
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setNum()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setLgAdr1()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setLgAdr2()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setLgAdr3()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setLgAdr4()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setCP()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setVille()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setPays()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setHoraires_Lundi()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setHoraires_Mardi()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setHoraires_Mercredi()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setHoraires_Jeudi()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setHoraires_Vendredi()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setHoraires_Samedi()
     * @uses Ret_WSI2_sub_PointRelaisHoraires::setHoraires_Dimanche()
     * @param string $num
     * @param string $lgAdr1
     * @param string $lgAdr2
     * @param string $lgAdr3
     * @param string $lgAdr4
     * @param string $cP
     * @param string $ville
     * @param string $pays
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Lundi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Mardi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Mercredi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Jeudi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Vendredi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Samedi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Dimanche
     */
    public function __construct($num = null, $lgAdr1 = null, $lgAdr2 = null, $lgAdr3 = null, $lgAdr4 = null, $cP = null, $ville = null, $pays = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Lundi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Mardi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Mercredi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Jeudi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Vendredi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Samedi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Dimanche = null)
    {
        $this
            ->setNum($num)
            ->setLgAdr1($lgAdr1)
            ->setLgAdr2($lgAdr2)
            ->setLgAdr3($lgAdr3)
            ->setLgAdr4($lgAdr4)
            ->setCP($cP)
            ->setVille($ville)
            ->setPays($pays)
            ->setHoraires_Lundi($horaires_Lundi)
            ->setHoraires_Mardi($horaires_Mardi)
            ->setHoraires_Mercredi($horaires_Mercredi)
            ->setHoraires_Jeudi($horaires_Jeudi)
            ->setHoraires_Vendredi($horaires_Vendredi)
            ->setHoraires_Samedi($horaires_Samedi)
            ->setHoraires_Dimanche($horaires_Dimanche);
    }
    /**
     * Get Num value
     * @return string|null
     */
    public function getNum()
    {
        return $this->Num;
    }
    /**
     * Set Num value
     * @param string $num
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setNum($num = null)
    {
        // validation for constraint: string
        if (!is_null($num) && !is_string($num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($num, true), gettype($num)), __LINE__);
        }
        $this->Num = $num;
        return $this;
    }
    /**
     * Get LgAdr1 value
     * @return string|null
     */
    public function getLgAdr1()
    {
        return $this->LgAdr1;
    }
    /**
     * Set LgAdr1 value
     * @param string $lgAdr1
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setLgAdr1($lgAdr1 = null)
    {
        // validation for constraint: string
        if (!is_null($lgAdr1) && !is_string($lgAdr1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lgAdr1, true), gettype($lgAdr1)), __LINE__);
        }
        $this->LgAdr1 = $lgAdr1;
        return $this;
    }
    /**
     * Get LgAdr2 value
     * @return string|null
     */
    public function getLgAdr2()
    {
        return $this->LgAdr2;
    }
    /**
     * Set LgAdr2 value
     * @param string $lgAdr2
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setLgAdr2($lgAdr2 = null)
    {
        // validation for constraint: string
        if (!is_null($lgAdr2) && !is_string($lgAdr2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lgAdr2, true), gettype($lgAdr2)), __LINE__);
        }
        $this->LgAdr2 = $lgAdr2;
        return $this;
    }
    /**
     * Get LgAdr3 value
     * @return string|null
     */
    public function getLgAdr3()
    {
        return $this->LgAdr3;
    }
    /**
     * Set LgAdr3 value
     * @param string $lgAdr3
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setLgAdr3($lgAdr3 = null)
    {
        // validation for constraint: string
        if (!is_null($lgAdr3) && !is_string($lgAdr3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lgAdr3, true), gettype($lgAdr3)), __LINE__);
        }
        $this->LgAdr3 = $lgAdr3;
        return $this;
    }
    /**
     * Get LgAdr4 value
     * @return string|null
     */
    public function getLgAdr4()
    {
        return $this->LgAdr4;
    }
    /**
     * Set LgAdr4 value
     * @param string $lgAdr4
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setLgAdr4($lgAdr4 = null)
    {
        // validation for constraint: string
        if (!is_null($lgAdr4) && !is_string($lgAdr4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lgAdr4, true), gettype($lgAdr4)), __LINE__);
        }
        $this->LgAdr4 = $lgAdr4;
        return $this;
    }
    /**
     * Get CP value
     * @return string|null
     */
    public function getCP()
    {
        return $this->CP;
    }
    /**
     * Set CP value
     * @param string $cP
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setCP($cP = null)
    {
        // validation for constraint: string
        if (!is_null($cP) && !is_string($cP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cP, true), gettype($cP)), __LINE__);
        }
        $this->CP = $cP;
        return $this;
    }
    /**
     * Get Ville value
     * @return string|null
     */
    public function getVille()
    {
        return $this->Ville;
    }
    /**
     * Set Ville value
     * @param string $ville
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setVille($ville = null)
    {
        // validation for constraint: string
        if (!is_null($ville) && !is_string($ville)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ville, true), gettype($ville)), __LINE__);
        }
        $this->Ville = $ville;
        return $this;
    }
    /**
     * Get Pays value
     * @return string|null
     */
    public function getPays()
    {
        return $this->Pays;
    }
    /**
     * Set Pays value
     * @param string $pays
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setPays($pays = null)
    {
        // validation for constraint: string
        if (!is_null($pays) && !is_string($pays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pays, true), gettype($pays)), __LINE__);
        }
        $this->Pays = $pays;
        return $this;
    }
    /**
     * Get Horaires_Lundi value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getHoraires_Lundi()
    {
        return $this->Horaires_Lundi;
    }
    /**
     * Set Horaires_Lundi value
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Lundi
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setHoraires_Lundi(\MondialRelay\ArrayType\ArrayOfString $horaires_Lundi = null)
    {
        $this->Horaires_Lundi = $horaires_Lundi;
        return $this;
    }
    /**
     * Get Horaires_Mardi value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getHoraires_Mardi()
    {
        return $this->Horaires_Mardi;
    }
    /**
     * Set Horaires_Mardi value
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Mardi
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setHoraires_Mardi(\MondialRelay\ArrayType\ArrayOfString $horaires_Mardi = null)
    {
        $this->Horaires_Mardi = $horaires_Mardi;
        return $this;
    }
    /**
     * Get Horaires_Mercredi value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getHoraires_Mercredi()
    {
        return $this->Horaires_Mercredi;
    }
    /**
     * Set Horaires_Mercredi value
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Mercredi
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setHoraires_Mercredi(\MondialRelay\ArrayType\ArrayOfString $horaires_Mercredi = null)
    {
        $this->Horaires_Mercredi = $horaires_Mercredi;
        return $this;
    }
    /**
     * Get Horaires_Jeudi value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getHoraires_Jeudi()
    {
        return $this->Horaires_Jeudi;
    }
    /**
     * Set Horaires_Jeudi value
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Jeudi
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setHoraires_Jeudi(\MondialRelay\ArrayType\ArrayOfString $horaires_Jeudi = null)
    {
        $this->Horaires_Jeudi = $horaires_Jeudi;
        return $this;
    }
    /**
     * Get Horaires_Vendredi value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getHoraires_Vendredi()
    {
        return $this->Horaires_Vendredi;
    }
    /**
     * Set Horaires_Vendredi value
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Vendredi
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setHoraires_Vendredi(\MondialRelay\ArrayType\ArrayOfString $horaires_Vendredi = null)
    {
        $this->Horaires_Vendredi = $horaires_Vendredi;
        return $this;
    }
    /**
     * Get Horaires_Samedi value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getHoraires_Samedi()
    {
        return $this->Horaires_Samedi;
    }
    /**
     * Set Horaires_Samedi value
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Samedi
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setHoraires_Samedi(\MondialRelay\ArrayType\ArrayOfString $horaires_Samedi = null)
    {
        $this->Horaires_Samedi = $horaires_Samedi;
        return $this;
    }
    /**
     * Get Horaires_Dimanche value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getHoraires_Dimanche()
    {
        return $this->Horaires_Dimanche;
    }
    /**
     * Set Horaires_Dimanche value
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Dimanche
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires
     */
    public function setHoraires_Dimanche(\MondialRelay\ArrayType\ArrayOfString $horaires_Dimanche = null)
    {
        $this->Horaires_Dimanche = $horaires_Dimanche;
        return $this;
    }
}
