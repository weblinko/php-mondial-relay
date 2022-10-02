<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSI2_RecherchePointRelaisAvancee StructType
 * @subpackage Structs
 */
class WSI2_RecherchePointRelaisAvancee extends AbstractStructBase
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
     * The Latitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Longitude;
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
     * The DelaiEnvoi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DelaiEnvoi;
    /**
     * The RayonRecherche
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RayonRecherche;
    /**
     * The TypeActivite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TypeActivite;
    /**
     * The NACE
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NACE;
    /**
     * The Security
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Security;
    /**
     * Constructor method for WSI2_RecherchePointRelaisAvancee
     * @uses WSI2_RecherchePointRelaisAvancee::setEnseigne()
     * @uses WSI2_RecherchePointRelaisAvancee::setPays()
     * @uses WSI2_RecherchePointRelaisAvancee::setVille()
     * @uses WSI2_RecherchePointRelaisAvancee::setCP()
     * @uses WSI2_RecherchePointRelaisAvancee::setLatitude()
     * @uses WSI2_RecherchePointRelaisAvancee::setLongitude()
     * @uses WSI2_RecherchePointRelaisAvancee::setTaille()
     * @uses WSI2_RecherchePointRelaisAvancee::setPoids()
     * @uses WSI2_RecherchePointRelaisAvancee::setAction()
     * @uses WSI2_RecherchePointRelaisAvancee::setDelaiEnvoi()
     * @uses WSI2_RecherchePointRelaisAvancee::setRayonRecherche()
     * @uses WSI2_RecherchePointRelaisAvancee::setTypeActivite()
     * @uses WSI2_RecherchePointRelaisAvancee::setNACE()
     * @uses WSI2_RecherchePointRelaisAvancee::setSecurity()
     * @param string $enseigne
     * @param string $pays
     * @param string $ville
     * @param string $cP
     * @param string $latitude
     * @param string $longitude
     * @param string $taille
     * @param string $poids
     * @param string $action
     * @param string $delaiEnvoi
     * @param string $rayonRecherche
     * @param string $typeActivite
     * @param string $nACE
     * @param string $security
     */
    public function __construct($enseigne = null, $pays = null, $ville = null, $cP = null, $latitude = null, $longitude = null, $taille = null, $poids = null, $action = null, $delaiEnvoi = null, $rayonRecherche = null, $typeActivite = null, $nACE = null, $security = null)
    {
        $this
            ->setEnseigne($enseigne)
            ->setPays($pays)
            ->setVille($ville)
            ->setCP($cP)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setTaille($taille)
            ->setPoids($poids)
            ->setAction($action)
            ->setDelaiEnvoi($delaiEnvoi)
            ->setRayonRecherche($rayonRecherche)
            ->setTypeActivite($typeActivite)
            ->setNACE($nACE)
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
     * Get Latitude value
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param string $latitude
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param string $longitude
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
     * Get DelaiEnvoi value
     * @return string|null
     */
    public function getDelaiEnvoi()
    {
        return $this->DelaiEnvoi;
    }
    /**
     * Set DelaiEnvoi value
     * @param string $delaiEnvoi
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
     */
    public function setDelaiEnvoi($delaiEnvoi = null)
    {
        // validation for constraint: string
        if (!is_null($delaiEnvoi) && !is_string($delaiEnvoi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delaiEnvoi, true), gettype($delaiEnvoi)), __LINE__);
        }
        $this->DelaiEnvoi = $delaiEnvoi;
        return $this;
    }
    /**
     * Get RayonRecherche value
     * @return string|null
     */
    public function getRayonRecherche()
    {
        return $this->RayonRecherche;
    }
    /**
     * Set RayonRecherche value
     * @param string $rayonRecherche
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
     */
    public function setRayonRecherche($rayonRecherche = null)
    {
        // validation for constraint: string
        if (!is_null($rayonRecherche) && !is_string($rayonRecherche)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rayonRecherche, true), gettype($rayonRecherche)), __LINE__);
        }
        $this->RayonRecherche = $rayonRecherche;
        return $this;
    }
    /**
     * Get TypeActivite value
     * @return string|null
     */
    public function getTypeActivite()
    {
        return $this->TypeActivite;
    }
    /**
     * Set TypeActivite value
     * @param string $typeActivite
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
     */
    public function setTypeActivite($typeActivite = null)
    {
        // validation for constraint: string
        if (!is_null($typeActivite) && !is_string($typeActivite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeActivite, true), gettype($typeActivite)), __LINE__);
        }
        $this->TypeActivite = $typeActivite;
        return $this;
    }
    /**
     * Get NACE value
     * @return string|null
     */
    public function getNACE()
    {
        return $this->NACE;
    }
    /**
     * Set NACE value
     * @param string $nACE
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
     */
    public function setNACE($nACE = null)
    {
        // validation for constraint: string
        if (!is_null($nACE) && !is_string($nACE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nACE, true), gettype($nACE)), __LINE__);
        }
        $this->NACE = $nACE;
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
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee
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
