<?php

namespace MondialRelay\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for WSIP ServiceType
 * @subpackage Services
 */
class WSIP extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WSI3_PointRelais_Recherche
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI3_PointRelais_Recherche $parameters
     * @return \MondialRelay\StructType\WSI3_PointRelais_RechercheResponse|bool
     */
    public function WSI3_PointRelais_Recherche(\MondialRelay\StructType\WSI3_PointRelais_Recherche $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI3_PointRelais_Recherche($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WSI4_PointRelais_Recherche
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI4_PointRelais_Recherche $parameters
     * @return \MondialRelay\StructType\WSI4_PointRelais_RechercheResponse|bool
     */
    public function WSI4_PointRelais_Recherche(\MondialRelay\StructType\WSI4_PointRelais_Recherche $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI4_PointRelais_Recherche($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \MondialRelay\StructType\WSI3_PointRelais_RechercheResponse|\MondialRelay\StructType\WSI4_PointRelais_RechercheResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
