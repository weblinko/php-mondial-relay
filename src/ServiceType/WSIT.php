<?php

namespace MondialRelay\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for WSIT ServiceType
 * @subpackage Services
 */
class WSIT extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WSI2_TracingColisDetaille
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_TracingColisDetaille $parameters
     * @return \MondialRelay\StructType\WSI2_TracingColisDetailleResponse|bool
     */
    public function WSI2_TracingColisDetaille(\MondialRelay\StructType\WSI2_TracingColisDetaille $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_TracingColisDetaille($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \MondialRelay\StructType\WSI2_TracingColisDetailleResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
