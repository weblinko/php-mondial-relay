<?php

namespace MondialRelay\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointRelais_Details StructType
 * @subpackage Structs
 */
class PointRelais_Details extends AbstractStructBase
{
    /**
     * The STAT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $STAT;
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
     * The Localisation1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Localisation1;
    /**
     * The Localisation2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Localisation2;
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
     * The Information
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Information;
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
     * The Informations_Dispo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \MondialRelay\ArrayType\ArrayOfPeriode
     */
    public $Informations_Dispo;
    /**
     * The URL_Photo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL_Photo;
    /**
     * The URL_Plan
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL_Plan;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Distance;
    /**
     * Constructor method for PointRelais_Details
     * @uses PointRelais_Details::setSTAT()
     * @uses PointRelais_Details::setNum()
     * @uses PointRelais_Details::setLgAdr1()
     * @uses PointRelais_Details::setLgAdr2()
     * @uses PointRelais_Details::setLgAdr3()
     * @uses PointRelais_Details::setLgAdr4()
     * @uses PointRelais_Details::setCP()
     * @uses PointRelais_Details::setVille()
     * @uses PointRelais_Details::setPays()
     * @uses PointRelais_Details::setLocalisation1()
     * @uses PointRelais_Details::setLocalisation2()
     * @uses PointRelais_Details::setLatitude()
     * @uses PointRelais_Details::setLongitude()
     * @uses PointRelais_Details::setTypeActivite()
     * @uses PointRelais_Details::setNACE()
     * @uses PointRelais_Details::setInformation()
     * @uses PointRelais_Details::setHoraires_Lundi()
     * @uses PointRelais_Details::setHoraires_Mardi()
     * @uses PointRelais_Details::setHoraires_Mercredi()
     * @uses PointRelais_Details::setHoraires_Jeudi()
     * @uses PointRelais_Details::setHoraires_Vendredi()
     * @uses PointRelais_Details::setHoraires_Samedi()
     * @uses PointRelais_Details::setHoraires_Dimanche()
     * @uses PointRelais_Details::setInformations_Dispo()
     * @uses PointRelais_Details::setURL_Photo()
     * @uses PointRelais_Details::setURL_Plan()
     * @uses PointRelais_Details::setDistance()
     * @param string $sTAT
     * @param string $num
     * @param string $lgAdr1
     * @param string $lgAdr2
     * @param string $lgAdr3
     * @param string $lgAdr4
     * @param string $cP
     * @param string $ville
     * @param string $pays
     * @param string $localisation1
     * @param string $localisation2
     * @param string $latitude
     * @param string $longitude
     * @param string $typeActivite
     * @param string $nACE
     * @param string $information
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Lundi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Mardi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Mercredi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Jeudi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Vendredi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Samedi
     * @param \MondialRelay\ArrayType\ArrayOfString $horaires_Dimanche
     * @param \MondialRelay\ArrayType\ArrayOfPeriode $informations_Dispo
     * @param string $uRL_Photo
     * @param string $uRL_Plan
     * @param string $distance
     */
    public function __construct($sTAT = null, $num = null, $lgAdr1 = null, $lgAdr2 = null, $lgAdr3 = null, $lgAdr4 = null, $cP = null, $ville = null, $pays = null, $localisation1 = null, $localisation2 = null, $latitude = null, $longitude = null, $typeActivite = null, $nACE = null, $information = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Lundi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Mardi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Mercredi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Jeudi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Vendredi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Samedi = null, \MondialRelay\ArrayType\ArrayOfString $horaires_Dimanche = null, \MondialRelay\ArrayType\ArrayOfPeriode $informations_Dispo = null, $uRL_Photo = null, $uRL_Plan = null, $distance = null)
    {
        $this
            ->setSTAT($sTAT)
            ->setNum($num)
            ->setLgAdr1($lgAdr1)
            ->setLgAdr2($lgAdr2)
            ->setLgAdr3($lgAdr3)
            ->setLgAdr4($lgAdr4)
            ->setCP($cP)
            ->setVille($ville)
            ->setPays($pays)
            ->setLocalisation1($localisation1)
            ->setLocalisation2($localisation2)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setTypeActivite($typeActivite)
            ->setNACE($nACE)
            ->setInformation($information)
            ->setHoraires_Lundi($horaires_Lundi)
            ->setHoraires_Mardi($horaires_Mardi)
            ->setHoraires_Mercredi($horaires_Mercredi)
            ->setHoraires_Jeudi($horaires_Jeudi)
            ->setHoraires_Vendredi($horaires_Vendredi)
            ->setHoraires_Samedi($horaires_Samedi)
            ->setHoraires_Dimanche($horaires_Dimanche)
            ->setInformations_Dispo($informations_Dispo)
            ->setURL_Photo($uRL_Photo)
            ->setURL_Plan($uRL_Plan)
            ->setDistance($distance);
    }
    /**
     * Get STAT value
     * @return string|null
     */
    public function getSTAT()
    {
        return $this->STAT;
    }
    /**
     * Set STAT value
     * @param string $sTAT
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setSTAT($sTAT = null)
    {
        // validation for constraint: string
        if (!is_null($sTAT) && !is_string($sTAT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTAT, true), gettype($sTAT)), __LINE__);
        }
        $this->STAT = $sTAT;
        return $this;
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * Get Localisation1 value
     * @return string|null
     */
    public function getLocalisation1()
    {
        return $this->Localisation1;
    }
    /**
     * Set Localisation1 value
     * @param string $localisation1
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setLocalisation1($localisation1 = null)
    {
        // validation for constraint: string
        if (!is_null($localisation1) && !is_string($localisation1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localisation1, true), gettype($localisation1)), __LINE__);
        }
        $this->Localisation1 = $localisation1;
        return $this;
    }
    /**
     * Get Localisation2 value
     * @return string|null
     */
    public function getLocalisation2()
    {
        return $this->Localisation2;
    }
    /**
     * Set Localisation2 value
     * @param string $localisation2
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setLocalisation2($localisation2 = null)
    {
        // validation for constraint: string
        if (!is_null($localisation2) && !is_string($localisation2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localisation2, true), gettype($localisation2)), __LINE__);
        }
        $this->Localisation2 = $localisation2;
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * Get Information value
     * @return string|null
     */
    public function getInformation()
    {
        return $this->Information;
    }
    /**
     * Set Information value
     * @param string $information
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setInformation($information = null)
    {
        // validation for constraint: string
        if (!is_null($information) && !is_string($information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($information, true), gettype($information)), __LINE__);
        }
        $this->Information = $information;
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
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
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setHoraires_Dimanche(\MondialRelay\ArrayType\ArrayOfString $horaires_Dimanche = null)
    {
        $this->Horaires_Dimanche = $horaires_Dimanche;
        return $this;
    }
    /**
     * Get Informations_Dispo value
     * @return \MondialRelay\ArrayType\ArrayOfPeriode|null
     */
    public function getInformations_Dispo()
    {
        return $this->Informations_Dispo;
    }
    /**
     * Set Informations_Dispo value
     * @param \MondialRelay\ArrayType\ArrayOfPeriode $informations_Dispo
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setInformations_Dispo(\MondialRelay\ArrayType\ArrayOfPeriode $informations_Dispo = null)
    {
        $this->Informations_Dispo = $informations_Dispo;
        return $this;
    }
    /**
     * Get URL_Photo value
     * @return string|null
     */
    public function getURL_Photo()
    {
        return $this->URL_Photo;
    }
    /**
     * Set URL_Photo value
     * @param string $uRL_Photo
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setURL_Photo($uRL_Photo = null)
    {
        // validation for constraint: string
        if (!is_null($uRL_Photo) && !is_string($uRL_Photo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL_Photo, true), gettype($uRL_Photo)), __LINE__);
        }
        $this->URL_Photo = $uRL_Photo;
        return $this;
    }
    /**
     * Get URL_Plan value
     * @return string|null
     */
    public function getURL_Plan()
    {
        return $this->URL_Plan;
    }
    /**
     * Set URL_Plan value
     * @param string $uRL_Plan
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setURL_Plan($uRL_Plan = null)
    {
        // validation for constraint: string
        if (!is_null($uRL_Plan) && !is_string($uRL_Plan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL_Plan, true), gettype($uRL_Plan)), __LINE__);
        }
        $this->URL_Plan = $uRL_Plan;
        return $this;
    }
    /**
     * Get Distance value
     * @return string|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param string $distance
     * @return \MondialRelay\StructType\PointRelais_Details
     */
    public function setDistance($distance = null)
    {
        // validation for constraint: string
        if (!is_null($distance) && !is_string($distance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distance, true), gettype($distance)), __LINE__);
        }
        $this->Distance = $distance;
        return $this;
    }
}
