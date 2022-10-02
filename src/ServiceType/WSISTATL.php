<?php

namespace MondialRelay\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for WSISTATL ServiceType
 * @subpackage Services
 */
class WSISTATL extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WSI2_STAT_Label
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_STAT_Label $parameters
     * @return \MondialRelay\StructType\WSI2_STAT_LabelResponse|bool
     */
    public function WSI2_STAT_Label(\MondialRelay\StructType\WSI2_STAT_Label $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_STAT_Label($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WSI2_STAT_Labels
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \MondialRelay\StructType\WSI2_STAT_Labels $parameters
     * @return \MondialRelay\StructType\WSI2_STAT_LabelsResponse|bool
     */
    public function WSI2_STAT_Labels(\MondialRelay\StructType\WSI2_STAT_Labels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WSI2_STAT_Labels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \MondialRelay\StructType\WSI2_STAT_LabelResponse|\MondialRelay\StructType\WSI2_STAT_LabelsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
