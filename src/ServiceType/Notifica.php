<?php

namespace SDICoop\SdIRiceviNotifica\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Notifica ServiceType
 * @subpackage Services
 */
class Notifica extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named NotificaEsito
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SDICoop\SdIRiceviNotifica\StructType\FileSdI_Type $parameters
     * @return \SDICoop\SdIRiceviNotifica\StructType\RispostaSdINotificaEsito_Type|bool
     */
    public function NotificaEsito(\SDICoop\SdIRiceviNotifica\StructType\FileSdI_Type $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->NotificaEsito($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SDICoop\SdIRiceviNotifica\StructType\RispostaSdINotificaEsito_Type
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
