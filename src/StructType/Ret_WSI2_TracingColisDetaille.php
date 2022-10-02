<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_TracingColisDetaille StructType
 * @subpackage Structs
 */
class Ret_WSI2_TracingColisDetaille extends Ret_
{
    /**
     * The Libelle01
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Libelle01;
    /**
     * The Relais_Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Relais_Libelle;
    /**
     * The Relais_Num
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Relais_Num;
    /**
     * The Libelle02
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Libelle02;
    /**
     * The Tracing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille
     */
    public $Tracing;
    /**
     * Constructor method for ret_WSI2_TracingColisDetaille
     * @uses Ret_WSI2_TracingColisDetaille::setLibelle01()
     * @uses Ret_WSI2_TracingColisDetaille::setRelais_Libelle()
     * @uses Ret_WSI2_TracingColisDetaille::setRelais_Num()
     * @uses Ret_WSI2_TracingColisDetaille::setLibelle02()
     * @uses Ret_WSI2_TracingColisDetaille::setTracing()
     * @param string $libelle01
     * @param string $relais_Libelle
     * @param string $relais_Num
     * @param string $libelle02
     * @param \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille $tracing
     */
    public function __construct($libelle01 = null, $relais_Libelle = null, $relais_Num = null, $libelle02 = null, \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille $tracing = null)
    {
        $this
            ->setLibelle01($libelle01)
            ->setRelais_Libelle($relais_Libelle)
            ->setRelais_Num($relais_Num)
            ->setLibelle02($libelle02)
            ->setTracing($tracing);
    }
    /**
     * Get Libelle01 value
     * @return string|null
     */
    public function getLibelle01()
    {
        return $this->Libelle01;
    }
    /**
     * Set Libelle01 value
     * @param string $libelle01
     * @return \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille
     */
    public function setLibelle01($libelle01 = null)
    {
        // validation for constraint: string
        if (!is_null($libelle01) && !is_string($libelle01)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelle01, true), gettype($libelle01)), __LINE__);
        }
        $this->Libelle01 = $libelle01;
        return $this;
    }
    /**
     * Get Relais_Libelle value
     * @return string|null
     */
    public function getRelais_Libelle()
    {
        return $this->Relais_Libelle;
    }
    /**
     * Set Relais_Libelle value
     * @param string $relais_Libelle
     * @return \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille
     */
    public function setRelais_Libelle($relais_Libelle = null)
    {
        // validation for constraint: string
        if (!is_null($relais_Libelle) && !is_string($relais_Libelle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relais_Libelle, true), gettype($relais_Libelle)), __LINE__);
        }
        $this->Relais_Libelle = $relais_Libelle;
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
     * @return \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille
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
     * Get Libelle02 value
     * @return string|null
     */
    public function getLibelle02()
    {
        return $this->Libelle02;
    }
    /**
     * Set Libelle02 value
     * @param string $libelle02
     * @return \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille
     */
    public function setLibelle02($libelle02 = null)
    {
        // validation for constraint: string
        if (!is_null($libelle02) && !is_string($libelle02)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelle02, true), gettype($libelle02)), __LINE__);
        }
        $this->Libelle02 = $libelle02;
        return $this;
    }
    /**
     * Get Tracing value
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille|null
     */
    public function getTracing()
    {
        return $this->Tracing;
    }
    /**
     * Set Tracing value
     * @param \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille $tracing
     * @return \MondialRelay\StructType\Ret_WSI2_TracingColisDetaille
     */
    public function setTracing(\MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille $tracing = null)
    {
        $this->Tracing = $tracing;
        return $this;
    }
}
