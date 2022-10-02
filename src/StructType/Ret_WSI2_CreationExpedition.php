<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ret_WSI2_CreationExpedition StructType
 * @subpackage Structs
 */
class Ret_WSI2_CreationExpedition extends Ret_
{
    /**
     * The ExpeditionNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpeditionNum;
    /**
     * The TRI_AgenceCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TRI_AgenceCode;
    /**
     * The TRI_Groupe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TRI_Groupe;
    /**
     * The TRI_Navette
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TRI_Navette;
    /**
     * The TRI_Agence
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TRI_Agence;
    /**
     * The TRI_TourneeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TRI_TourneeCode;
    /**
     * The TRI_LivraisonMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TRI_LivraisonMode;
    /**
     * The CodesBarres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfString
     */
    public $CodesBarres;
    /**
     * Constructor method for ret_WSI2_CreationExpedition
     * @uses Ret_WSI2_CreationExpedition::setExpeditionNum()
     * @uses Ret_WSI2_CreationExpedition::setTRI_AgenceCode()
     * @uses Ret_WSI2_CreationExpedition::setTRI_Groupe()
     * @uses Ret_WSI2_CreationExpedition::setTRI_Navette()
     * @uses Ret_WSI2_CreationExpedition::setTRI_Agence()
     * @uses Ret_WSI2_CreationExpedition::setTRI_TourneeCode()
     * @uses Ret_WSI2_CreationExpedition::setTRI_LivraisonMode()
     * @uses Ret_WSI2_CreationExpedition::setCodesBarres()
     * @param string $expeditionNum
     * @param string $tRI_AgenceCode
     * @param string $tRI_Groupe
     * @param string $tRI_Navette
     * @param string $tRI_Agence
     * @param string $tRI_TourneeCode
     * @param string $tRI_LivraisonMode
     * @param \MondialRelay\ArrayType\ArrayOfString $codesBarres
     */
    public function __construct($expeditionNum = null, $tRI_AgenceCode = null, $tRI_Groupe = null, $tRI_Navette = null, $tRI_Agence = null, $tRI_TourneeCode = null, $tRI_LivraisonMode = null, \MondialRelay\ArrayType\ArrayOfString $codesBarres = null)
    {
        $this
            ->setExpeditionNum($expeditionNum)
            ->setTRI_AgenceCode($tRI_AgenceCode)
            ->setTRI_Groupe($tRI_Groupe)
            ->setTRI_Navette($tRI_Navette)
            ->setTRI_Agence($tRI_Agence)
            ->setTRI_TourneeCode($tRI_TourneeCode)
            ->setTRI_LivraisonMode($tRI_LivraisonMode)
            ->setCodesBarres($codesBarres);
    }
    /**
     * Get ExpeditionNum value
     * @return string|null
     */
    public function getExpeditionNum()
    {
        return $this->ExpeditionNum;
    }
    /**
     * Set ExpeditionNum value
     * @param string $expeditionNum
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setExpeditionNum($expeditionNum = null)
    {
        // validation for constraint: string
        if (!is_null($expeditionNum) && !is_string($expeditionNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expeditionNum, true), gettype($expeditionNum)), __LINE__);
        }
        $this->ExpeditionNum = $expeditionNum;
        return $this;
    }
    /**
     * Get TRI_AgenceCode value
     * @return string|null
     */
    public function getTRI_AgenceCode()
    {
        return $this->TRI_AgenceCode;
    }
    /**
     * Set TRI_AgenceCode value
     * @param string $tRI_AgenceCode
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setTRI_AgenceCode($tRI_AgenceCode = null)
    {
        // validation for constraint: string
        if (!is_null($tRI_AgenceCode) && !is_string($tRI_AgenceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tRI_AgenceCode, true), gettype($tRI_AgenceCode)), __LINE__);
        }
        $this->TRI_AgenceCode = $tRI_AgenceCode;
        return $this;
    }
    /**
     * Get TRI_Groupe value
     * @return string|null
     */
    public function getTRI_Groupe()
    {
        return $this->TRI_Groupe;
    }
    /**
     * Set TRI_Groupe value
     * @param string $tRI_Groupe
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setTRI_Groupe($tRI_Groupe = null)
    {
        // validation for constraint: string
        if (!is_null($tRI_Groupe) && !is_string($tRI_Groupe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tRI_Groupe, true), gettype($tRI_Groupe)), __LINE__);
        }
        $this->TRI_Groupe = $tRI_Groupe;
        return $this;
    }
    /**
     * Get TRI_Navette value
     * @return string|null
     */
    public function getTRI_Navette()
    {
        return $this->TRI_Navette;
    }
    /**
     * Set TRI_Navette value
     * @param string $tRI_Navette
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setTRI_Navette($tRI_Navette = null)
    {
        // validation for constraint: string
        if (!is_null($tRI_Navette) && !is_string($tRI_Navette)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tRI_Navette, true), gettype($tRI_Navette)), __LINE__);
        }
        $this->TRI_Navette = $tRI_Navette;
        return $this;
    }
    /**
     * Get TRI_Agence value
     * @return string|null
     */
    public function getTRI_Agence()
    {
        return $this->TRI_Agence;
    }
    /**
     * Set TRI_Agence value
     * @param string $tRI_Agence
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setTRI_Agence($tRI_Agence = null)
    {
        // validation for constraint: string
        if (!is_null($tRI_Agence) && !is_string($tRI_Agence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tRI_Agence, true), gettype($tRI_Agence)), __LINE__);
        }
        $this->TRI_Agence = $tRI_Agence;
        return $this;
    }
    /**
     * Get TRI_TourneeCode value
     * @return string|null
     */
    public function getTRI_TourneeCode()
    {
        return $this->TRI_TourneeCode;
    }
    /**
     * Set TRI_TourneeCode value
     * @param string $tRI_TourneeCode
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setTRI_TourneeCode($tRI_TourneeCode = null)
    {
        // validation for constraint: string
        if (!is_null($tRI_TourneeCode) && !is_string($tRI_TourneeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tRI_TourneeCode, true), gettype($tRI_TourneeCode)), __LINE__);
        }
        $this->TRI_TourneeCode = $tRI_TourneeCode;
        return $this;
    }
    /**
     * Get TRI_LivraisonMode value
     * @return string|null
     */
    public function getTRI_LivraisonMode()
    {
        return $this->TRI_LivraisonMode;
    }
    /**
     * Set TRI_LivraisonMode value
     * @param string $tRI_LivraisonMode
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setTRI_LivraisonMode($tRI_LivraisonMode = null)
    {
        // validation for constraint: string
        if (!is_null($tRI_LivraisonMode) && !is_string($tRI_LivraisonMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tRI_LivraisonMode, true), gettype($tRI_LivraisonMode)), __LINE__);
        }
        $this->TRI_LivraisonMode = $tRI_LivraisonMode;
        return $this;
    }
    /**
     * Get CodesBarres value
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function getCodesBarres()
    {
        return $this->CodesBarres;
    }
    /**
     * Set CodesBarres value
     * @param \MondialRelay\ArrayType\ArrayOfString $codesBarres
     * @return \MondialRelay\StructType\Ret_WSI2_CreationExpedition
     */
    public function setCodesBarres(\MondialRelay\ArrayType\ArrayOfString $codesBarres = null)
    {
        $this->CodesBarres = $codesBarres;
        return $this;
    }
}
