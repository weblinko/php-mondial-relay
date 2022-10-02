<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://api.mondialrelay.com/Web_Services.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://api.mondialrelay.com/Web_Services.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \MondialRelay\ClassMap::get(),
);
/**
 * Samples for WSIC ServiceType
 */
$wSIC = new \MondialRelay\ServiceType\WSIC($options);
/**
 * Sample call for WSI2_CreationExpedition operation/method
 */
if ($wSIC->WSI2_CreationExpedition(new \MondialRelay\StructType\WSI2_CreationExpedition()) !== false) {
    print_r($wSIC->getResult());
} else {
    print_r($wSIC->getLastError());
}
/**
 * Sample call for WSI2_CreationEtiquette operation/method
 */
if ($wSIC->WSI2_CreationEtiquette(new \MondialRelay\StructType\WSI2_CreationEtiquette()) !== false) {
    print_r($wSIC->getResult());
} else {
    print_r($wSIC->getLastError());
}
/**
 * Samples for WSIG ServiceType
 */
$wSIG = new \MondialRelay\ServiceType\WSIG($options);
/**
 * Sample call for WSI3_GetEtiquettes operation/method
 */
if ($wSIG->WSI3_GetEtiquettes(new \MondialRelay\StructType\WSI3_GetEtiquettes()) !== false) {
    print_r($wSIG->getResult());
} else {
    print_r($wSIG->getLastError());
}
/**
 * Sample call for WSI2_GetEtiquettes operation/method
 */
if ($wSIG->WSI2_GetEtiquettes(new \MondialRelay\StructType\WSI2_GetEtiquettes()) !== false) {
    print_r($wSIG->getResult());
} else {
    print_r($wSIG->getLastError());
}
/**
 * Samples for WSIR ServiceType
 */
$wSIR = new \MondialRelay\ServiceType\WSIR($options);
/**
 * Sample call for WSI2_RechercheCP operation/method
 */
if ($wSIR->WSI2_RechercheCP(new \MondialRelay\StructType\WSI2_RechercheCP()) !== false) {
    print_r($wSIR->getResult());
} else {
    print_r($wSIR->getLastError());
}
/**
 * Sample call for WSI2_RecherchePointRelais operation/method
 */
if ($wSIR->WSI2_RecherchePointRelais(new \MondialRelay\StructType\WSI2_RecherchePointRelais()) !== false) {
    print_r($wSIR->getResult());
} else {
    print_r($wSIR->getLastError());
}
/**
 * Sample call for WSI2_RecherchePointRelaisAvancee operation/method
 */
if ($wSIR->WSI2_RecherchePointRelaisAvancee(new \MondialRelay\StructType\WSI2_RecherchePointRelaisAvancee()) !== false) {
    print_r($wSIR->getResult());
} else {
    print_r($wSIR->getLastError());
}
/**
 * Sample call for WSI2_RecherchePointRelaisHoraires operation/method
 */
if ($wSIR->WSI2_RecherchePointRelaisHoraires(new \MondialRelay\StructType\WSI2_RecherchePointRelaisHoraires()) !== false) {
    print_r($wSIR->getResult());
} else {
    print_r($wSIR->getLastError());
}
/**
 * Samples for WSIP ServiceType
 */
$wSIP = new \MondialRelay\ServiceType\WSIP($options);
/**
 * Sample call for WSI3_PointRelais_Recherche operation/method
 */
if ($wSIP->WSI3_PointRelais_Recherche(new \MondialRelay\StructType\WSI3_PointRelais_Recherche()) !== false) {
    print_r($wSIP->getResult());
} else {
    print_r($wSIP->getLastError());
}
/**
 * Sample call for WSI4_PointRelais_Recherche operation/method
 */
if ($wSIP->WSI4_PointRelais_Recherche(new \MondialRelay\StructType\WSI4_PointRelais_Recherche()) !== false) {
    print_r($wSIP->getResult());
} else {
    print_r($wSIP->getLastError());
}
/**
 * Samples for WSIA ServiceType
 */
$wSIA = new \MondialRelay\ServiceType\WSIA($options);
/**
 * Sample call for WSI2_AdressePointRelais operation/method
 */
if ($wSIA->WSI2_AdressePointRelais(new \MondialRelay\StructType\WSI2_AdressePointRelais()) !== false) {
    print_r($wSIA->getResult());
} else {
    print_r($wSIA->getLastError());
}
/**
 * Samples for WSID ServiceType
 */
$wSID = new \MondialRelay\ServiceType\WSID($options);
/**
 * Sample call for WSI2_DetailPointRelais operation/method
 */
if ($wSID->WSI2_DetailPointRelais(new \MondialRelay\StructType\WSI2_DetailPointRelais()) !== false) {
    print_r($wSID->getResult());
} else {
    print_r($wSID->getLastError());
}
/**
 * Samples for WSIT ServiceType
 */
$wSIT = new \MondialRelay\ServiceType\WSIT($options);
/**
 * Sample call for WSI2_TracingColisDetaille operation/method
 */
if ($wSIT->WSI2_TracingColisDetaille(new \MondialRelay\StructType\WSI2_TracingColisDetaille()) !== false) {
    print_r($wSIT->getResult());
} else {
    print_r($wSIT->getLastError());
}
/**
 * Samples for WSISTATL ServiceType
 */
$wSISTATL = new \MondialRelay\ServiceType\WSISTATL($options);
/**
 * Sample call for WSI2_STAT_Label operation/method
 */
if ($wSISTATL->WSI2_STAT_Label(new \MondialRelay\StructType\WSI2_STAT_Label()) !== false) {
    print_r($wSISTATL->getResult());
} else {
    print_r($wSISTATL->getLastError());
}
/**
 * Sample call for WSI2_STAT_Labels operation/method
 */
if ($wSISTATL->WSI2_STAT_Labels(new \MondialRelay\StructType\WSI2_STAT_Labels()) !== false) {
    print_r($wSISTATL->getResult());
} else {
    print_r($wSISTATL->getLastError());
}
