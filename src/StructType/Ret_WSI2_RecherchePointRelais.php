<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_RecherchePointRelais StructType
 * @subpackage Structs
 */
class Ret_WSI2_RecherchePointRelais extends Ret_
{
    /**
     * The PR01
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR01;
    /**
     * The PR02
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR02;
    /**
     * The PR03
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR03;
    /**
     * The PR04
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR04;
    /**
     * The PR05
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR05;
    /**
     * The PR06
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR06;
    /**
     * The PR07
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR07;
    /**
     * The PR08
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR08;
    /**
     * The PR09
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR09;
    /**
     * The PR10
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelais
     */
    public $PR10;
    /**
     * Constructor method for ret_WSI2_RecherchePointRelais
     * @uses Ret_WSI2_RecherchePointRelais::setPR01()
     * @uses Ret_WSI2_RecherchePointRelais::setPR02()
     * @uses Ret_WSI2_RecherchePointRelais::setPR03()
     * @uses Ret_WSI2_RecherchePointRelais::setPR04()
     * @uses Ret_WSI2_RecherchePointRelais::setPR05()
     * @uses Ret_WSI2_RecherchePointRelais::setPR06()
     * @uses Ret_WSI2_RecherchePointRelais::setPR07()
     * @uses Ret_WSI2_RecherchePointRelais::setPR08()
     * @uses Ret_WSI2_RecherchePointRelais::setPR09()
     * @uses Ret_WSI2_RecherchePointRelais::setPR10()
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR01
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR02
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR03
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR04
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR05
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR06
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR07
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR08
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR09
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR10
     */
    public function __construct(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR01 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR02 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR03 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR04 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR05 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR06 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR07 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR08 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR09 = null, \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR10 = null)
    {
        $this
            ->setPR01($pR01)
            ->setPR02($pR02)
            ->setPR03($pR03)
            ->setPR04($pR04)
            ->setPR05($pR05)
            ->setPR06($pR06)
            ->setPR07($pR07)
            ->setPR08($pR08)
            ->setPR09($pR09)
            ->setPR10($pR10);
    }
    /**
     * Get PR01 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR01()
    {
        return $this->PR01;
    }
    /**
     * Set PR01 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR01
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR01(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR01 = null)
    {
        $this->PR01 = $pR01;
        return $this;
    }
    /**
     * Get PR02 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR02()
    {
        return $this->PR02;
    }
    /**
     * Set PR02 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR02
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR02(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR02 = null)
    {
        $this->PR02 = $pR02;
        return $this;
    }
    /**
     * Get PR03 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR03()
    {
        return $this->PR03;
    }
    /**
     * Set PR03 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR03
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR03(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR03 = null)
    {
        $this->PR03 = $pR03;
        return $this;
    }
    /**
     * Get PR04 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR04()
    {
        return $this->PR04;
    }
    /**
     * Set PR04 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR04
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR04(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR04 = null)
    {
        $this->PR04 = $pR04;
        return $this;
    }
    /**
     * Get PR05 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR05()
    {
        return $this->PR05;
    }
    /**
     * Set PR05 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR05
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR05(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR05 = null)
    {
        $this->PR05 = $pR05;
        return $this;
    }
    /**
     * Get PR06 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR06()
    {
        return $this->PR06;
    }
    /**
     * Set PR06 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR06
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR06(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR06 = null)
    {
        $this->PR06 = $pR06;
        return $this;
    }
    /**
     * Get PR07 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR07()
    {
        return $this->PR07;
    }
    /**
     * Set PR07 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR07
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR07(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR07 = null)
    {
        $this->PR07 = $pR07;
        return $this;
    }
    /**
     * Get PR08 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR08()
    {
        return $this->PR08;
    }
    /**
     * Set PR08 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR08
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR08(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR08 = null)
    {
        $this->PR08 = $pR08;
        return $this;
    }
    /**
     * Get PR09 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR09()
    {
        return $this->PR09;
    }
    /**
     * Set PR09 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR09
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR09(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR09 = null)
    {
        $this->PR09 = $pR09;
        return $this;
    }
    /**
     * Get PR10 value
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelais|null
     */
    public function getPR10()
    {
        return $this->PR10;
    }
    /**
     * Set PR10 value
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR10
     * @return \MondialRelay\StructType\Ret_WSI2_RecherchePointRelais
     */
    public function setPR10(\MondialRelay\StructType\Ret_WSI2_sub_PointRelais $pR10 = null)
    {
        $this->PR10 = $pR10;
        return $this;
    }
}
