<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_RecherchePointRelais StructType
 * @subpackage Structs
 */
class WSI2_RecherchePointRelais extends AbstractStructBase
{
    /**
     * The Enseigne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Enseigne;
    /**
     * The Pays
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pays;
    /**
     * The Ville
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ville;
    /**
     * The CP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CP;
    /**
     * The Taille
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Taille;
    /**
     * The Poids
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Poids;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The Security
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Security;
    /**
     * Constructor method for WSI2_RecherchePointRelais
     * @uses WSI2_RecherchePointRelais::setEnseigne()
     * @uses WSI2_RecherchePointRelais::setPays()
     * @uses WSI2_RecherchePointRelais::setVille()
     * @uses WSI2_RecherchePointRelais::setCP()
     * @uses WSI2_RecherchePointRelais::setTaille()
     * @uses WSI2_RecherchePointRelais::setPoids()
     * @uses WSI2_RecherchePointRelais::setAction()
     * @uses WSI2_RecherchePointRelais::setSecurity()
     * @param string $enseigne
     * @param string $pays
     * @param string $ville
     * @param string $cP
     * @param string $taille
     * @param string $poids
     * @param string $action
     * @param string $security
     */
    public function __construct($enseigne = null, $pays = null, $ville = null, $cP = null, $taille = null, $poids = null, $action = null, $security = null)
    {
        $this
            ->setEnseigne($enseigne)
            ->setPays($pays)
            ->setVille($ville)
            ->setCP($cP)
            ->setTaille($taille)
            ->setPoids($poids)
            ->setAction($action)
            ->setSecurity($security);
    }
    /**
     * Get Enseigne value
     * @return string|null
     */
    public function getEnseigne()
    {
        return $this->Enseigne;
    }
    /**
     * Set Enseigne value
     * @param string $enseigne
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
     */
    public function setEnseigne($enseigne = null)
    {
        // validation for constraint: string
        if (!is_null($enseigne) && !is_string($enseigne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enseigne, true), gettype($enseigne)), __LINE__);
        }
        $this->Enseigne = $enseigne;
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
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
     * Get Taille value
     * @return string|null
     */
    public function getTaille()
    {
        return $this->Taille;
    }
    /**
     * Set Taille value
     * @param string $taille
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
     */
    public function setTaille($taille = null)
    {
        // validation for constraint: string
        if (!is_null($taille) && !is_string($taille)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taille, true), gettype($taille)), __LINE__);
        }
        $this->Taille = $taille;
        return $this;
    }
    /**
     * Get Poids value
     * @return string|null
     */
    public function getPoids()
    {
        return $this->Poids;
    }
    /**
     * Set Poids value
     * @param string $poids
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
     */
    public function setPoids($poids = null)
    {
        // validation for constraint: string
        if (!is_null($poids) && !is_string($poids)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($poids, true), gettype($poids)), __LINE__);
        }
        $this->Poids = $poids;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get Security value
     * @return string|null
     */
    public function getSecurity()
    {
        return $this->Security;
    }
    /**
     * Set Security value
     * @param string $security
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelais
     */
    public function setSecurity($security = null)
    {
        // validation for constraint: string
        if (!is_null($security) && !is_string($security)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($security, true), gettype($security)), __LINE__);
        }
        $this->Security = $security;
        return $this;
    }
}
