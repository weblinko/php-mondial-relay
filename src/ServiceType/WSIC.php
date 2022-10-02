<?php

namespace MondialRelay\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for WSIC ServiceType
 * @subpackage Services
 */
class WSIC extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WSI2_CreationExpedition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_CreationExpedition $parameters
     * @return \MondialRelay\StructType\WSI2_CreationExpeditionResponse|bool
     */
    public function WSI2_CreationExpedition(\MondialRelay\StructType\WSI2_CreationExpedition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_CreationExpedition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WSI2_CreationEtiquette
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_CreationEtiquette $parameters
     * @return \MondialRelay\StructType\WSI2_CreationEtiquetteResponse|bool
     */
    public function WSI2_CreationEtiquette(\MondialRelay\StructType\WSI2_CreationEtiquette $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_CreationEtiquette($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \MondialRelay\StructType\WSI2_CreationEtiquetteResponse|\MondialRelay\StructType\WSI2_CreationExpeditionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
