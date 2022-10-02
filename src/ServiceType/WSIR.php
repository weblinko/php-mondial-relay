<?php

namespace MondialRelay\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for WSIR ServiceType
 * @subpackage Services
 */
class WSIR extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WSI2_RechercheCP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_RechercheCP $parameters
     * @return \MondialRelay\StructType\WSI2_RechercheCPResponse|bool
     */
    public function WSI2_RechercheCP(\MondialRelay\StructType\WSI2_RechercheCP $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_RechercheCP($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WSI2_RecherchePointRelais
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_RecherchePointRelais $parameters
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisResponse|bool
     */
    public function WSI2_RecherchePointRelais(\MondialRelay\StructType\WSI2_RecherchePointRelais $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_RecherchePointRelais($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WSI2_RecherchePointRelaisAvancee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee $parameters
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisAvanceeResponse|bool
     */
    public function WSI2_RecherchePointRelaisAvancee(\MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_RecherchePointRelaisAvancee($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WSI2_RecherchePointRelaisHoraires
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_RecherchePointRelaisHoraires $parameters
     * @return \MondialRelay\StructType\WSI2_RecherchePointRelaisHorairesResponse|bool
     */
    public function WSI2_RecherchePointRelaisHoraires(\MondialRelay\StructType\WSI2_RecherchePointRelaisHoraires $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_RecherchePointRelaisHoraires($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \MondialRelay\StructType\WSI2_RechercheCPResponse|\MondialRelay\StructType\WSI2_RecherchePointRelaisAvanceeResponse|\MondialRelay\StructType\WSI2_RecherchePointRelaisHorairesResponse|\MondialRelay\StructType\WSI2_RecherchePointRelaisResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
