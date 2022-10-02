<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_sub_PointRelais StructType
 * @subpackage Structs
 */
class Ret_WSI2_sub_PointRelais extends AbstractStructBase
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
     * Constructor method for ret_WSI2_sub_PointRelais
     * @uses Ret_WSI2_sub_PointRelais::setNum()
     * @uses Ret_WSI2_sub_PointRelais::setLgAdr1()
     * @uses Ret_WSI2_sub_PointRelais::setLgAdr2()
     * @uses Ret_WSI2_sub_PointRelais::setLgAdr3()
     * @uses Ret_WSI2_sub_PointRelais::setLgAdr4()
     * @uses Ret_WSI2_sub_PointRelais::setCP()
     * @uses Ret_WSI2_sub_PointRelais::setVille()
     * @uses Ret_WSI2_sub_PointRelais::setPays()
     * @param string $num
     * @param string $lgAdr1
     * @param string $lgAdr2
     * @param string $lgAdr3
     * @param string $lgAdr4
     * @param string $cP
     * @param string $ville
     * @param string $pays
     */
    public function __construct($num = null, $lgAdr1 = null, $lgAdr2 = null, $lgAdr3 = null, $lgAdr4 = null, $cP = null, $ville = null, $pays = null)
    {
        $this
            ->setNum($num)
            ->setLgAdr1($lgAdr1)
            ->setLgAdr2($lgAdr2)
            ->setLgAdr3($lgAdr3)
            ->setLgAdr4($lgAdr4)
            ->setCP($cP)
            ->setVille($ville)
            ->setPays($pays);
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
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
}
