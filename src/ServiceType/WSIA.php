<?php

namespace MondialRelay\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for WSIA ServiceType
 * @subpackage Services
 */
class WSIA extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WSI2_AdressePointRelais
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_AdressePointRelais $parameters
     * @return \MondialRelay\StructType\WSI2_AdressePointRelaisResponse|bool
     */
    public function WSI2_AdressePointRelais(\MondialRelay\StructType\WSI2_AdressePointRelais $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_AdressePointRelais($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \MondialRelay\StructType\WSI2_AdressePointRelaisResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
