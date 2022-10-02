<?php

namespace MondialRelay\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for WSIG ServiceType
 * @subpackage Services
 */
class WSIG extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WSI3_GetEtiquettes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI3_GetEtiquettes $parameters
     * @return \MondialRelay\StructType\WSI3_GetEtiquettesResponse|bool
     */
    public function WSI3_GetEtiquettes(\MondialRelay\StructType\WSI3_GetEtiquettes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI3_GetEtiquettes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WSI2_GetEtiquettes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_GetEtiquettes $parameters
     * @return \MondialRelay\StructType\WSI2_GetEtiquettesResponse|bool
     */
    public function WSI2_GetEtiquettes(\MondialRelay\StructType\WSI2_GetEtiquettes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_GetEtiquettes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \MondialRelay\StructType\WSI2_GetEtiquettesResponse|\MondialRelay\StructType\WSI3_GetEtiquettesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
