<?php

namespace MondialRelay;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'WSI2_CreationExpedition' => '\\MondialRelay\\StructType\\WSI2_CreationExpedition',
            'WSI2_CreationExpeditionResponse' => '\\MondialRelay\\StructType\\WSI2_CreationExpeditionResponse',
            'ret_WSI2_CreationExpedition' => '\\MondialRelay\\StructType\\Ret_WSI2_CreationExpedition',
            'ret_' => '\\MondialRelay\\StructType\\Ret_',
            'ArrayOfString' => '\\MondialRelay\\ArrayType\\ArrayOfString',
            'WSI2_CreationEtiquette' => '\\MondialRelay\\StructType\\WSI2_CreationEtiquette',
            'WSI2_CreationEtiquetteResponse' => '\\MondialRelay\\StructType\\WSI2_CreationEtiquetteResponse',
            'ret_WSI2_CreationEtiquette' => '\\MondialRelay\\StructType\\Ret_WSI2_CreationEtiquette',
            'WSI3_GetEtiquettes' => '\\MondialRelay\\StructType\\WSI3_GetEtiquettes',
            'WSI3_GetEtiquettesResponse' => '\\MondialRelay\\StructType\\WSI3_GetEtiquettesResponse',
            'ret_WSI3_GetEtiquettes' => '\\MondialRelay\\StructType\\Ret_WSI3_GetEtiquettes',
            'ret_WSI2_GetEtiquettes' => '\\MondialRelay\\StructType\\Ret_WSI2_GetEtiquettes',
            'WSI2_GetEtiquettes' => '\\MondialRelay\\StructType\\WSI2_GetEtiquettes',
            'WSI2_GetEtiquettesResponse' => '\\MondialRelay\\StructType\\WSI2_GetEtiquettesResponse',
            'WSI2_RechercheCP' => '\\MondialRelay\\StructType\\WSI2_RechercheCP',
            'WSI2_RechercheCPResponse' => '\\MondialRelay\\StructType\\WSI2_RechercheCPResponse',
            'ret_WSI2_RechercheCP' => '\\MondialRelay\\StructType\\Ret_WSI2_RechercheCP',
            'ArrayOfCommune' => '\\MondialRelay\\ArrayType\\ArrayOfCommune',
            'Commune' => '\\MondialRelay\\StructType\\Commune',
            'WSI3_PointRelais_Recherche' => '\\MondialRelay\\StructType\\WSI3_PointRelais_Recherche',
            'WSI3_PointRelais_RechercheResponse' => '\\MondialRelay\\StructType\\WSI3_PointRelais_RechercheResponse',
            'ret_WSI3_PointRelais_Recherche' => '\\MondialRelay\\StructType\\Ret_WSI3_PointRelais_Recherche',
            'ArrayOfPointRelais_Details' => '\\MondialRelay\\ArrayType\\ArrayOfPointRelais_Details',
            'PointRelais_Details' => '\\MondialRelay\\StructType\\PointRelais_Details',
            'ArrayOfPeriode' => '\\MondialRelay\\ArrayType\\ArrayOfPeriode',
            'Periode' => '\\MondialRelay\\StructType\\Periode',
            'WSI4_PointRelais_Recherche' => '\\MondialRelay\\StructType\\WSI4_PointRelais_Recherche',
            'WSI4_PointRelais_RechercheResponse' => '\\MondialRelay\\StructType\\WSI4_PointRelais_RechercheResponse',
            'WSI2_AdressePointRelais' => '\\MondialRelay\\StructType\\WSI2_AdressePointRelais',
            'WSI2_AdressePointRelaisResponse' => '\\MondialRelay\\StructType\\WSI2_AdressePointRelaisResponse',
            'ret_WSI2_AdressePointRelais' => '\\MondialRelay\\StructType\\Ret_WSI2_AdressePointRelais',
            'WSI2_DetailPointRelais' => '\\MondialRelay\\StructType\\WSI2_DetailPointRelais',
            'WSI2_DetailPointRelaisResponse' => '\\MondialRelay\\StructType\\WSI2_DetailPointRelaisResponse',
            'ret_WSI2_DetailPointRelais' => '\\MondialRelay\\StructType\\Ret_WSI2_DetailPointRelais',
            'WSI2_RecherchePointRelais' => '\\MondialRelay\\StructType\\WSI2_RecherchePointRelais',
            'WSI2_RecherchePointRelaisResponse' => '\\MondialRelay\\StructType\\WSI2_RecherchePointRelaisResponse',
            'ret_WSI2_RecherchePointRelais' => '\\MondialRelay\\StructType\\Ret_WSI2_RecherchePointRelais',
            'ret_WSI2_sub_PointRelais' => '\\MondialRelay\\StructType\\Ret_WSI2_sub_PointRelais',
            'WSI2_RecherchePointRelaisAvancee' => '\\MondialRelay\\StructType\\WSI2_RecherchePointRelaisAvancee',
            'WSI2_RecherchePointRelaisAvanceeResponse' => '\\MondialRelay\\StructType\\WSI2_RecherchePointRelaisAvanceeResponse',
            'ret_WSI2_RecherchePointRelaisAvancee' => '\\MondialRelay\\StructType\\Ret_WSI2_RecherchePointRelaisAvancee',
            'ArrayOfRet_WSI2_sub_PointRelaisAvancee' => '\\MondialRelay\\ArrayType\\ArrayOfRet_WSI2_sub_PointRelaisAvancee',
            'ret_WSI2_sub_PointRelaisAvancee' => '\\MondialRelay\\StructType\\Ret_WSI2_sub_PointRelaisAvancee',
            'WSI2_RecherchePointRelaisHoraires' => '\\MondialRelay\\StructType\\WSI2_RecherchePointRelaisHoraires',
            'WSI2_RecherchePointRelaisHorairesResponse' => '\\MondialRelay\\StructType\\WSI2_RecherchePointRelaisHorairesResponse',
            'ret_WSI2_RecherchePointRelaisHoraires' => '\\MondialRelay\\StructType\\Ret_WSI2_RecherchePointRelaisHoraires',
            'ArrayOfRet_WSI2_sub_PointRelaisHoraires' => '\\MondialRelay\\ArrayType\\ArrayOfRet_WSI2_sub_PointRelaisHoraires',
            'ret_WSI2_sub_PointRelaisHoraires' => '\\MondialRelay\\StructType\\Ret_WSI2_sub_PointRelaisHoraires',
            'WSI2_TracingColisDetaille' => '\\MondialRelay\\StructType\\WSI2_TracingColisDetaille',
            'WSI2_TracingColisDetailleResponse' => '\\MondialRelay\\StructType\\WSI2_TracingColisDetailleResponse',
            'ret_WSI2_TracingColisDetaille' => '\\MondialRelay\\StructType\\Ret_WSI2_TracingColisDetaille',
            'ArrayOfRet_WSI2_sub_TracingColisDetaille' => '\\MondialRelay\\ArrayType\\ArrayOfRet_WSI2_sub_TracingColisDetaille',
            'ret_WSI2_sub_TracingColisDetaille' => '\\MondialRelay\\StructType\\Ret_WSI2_sub_TracingColisDetaille',
            'WSI2_STAT_Label' => '\\MondialRelay\\StructType\\WSI2_STAT_Label',
            'WSI2_STAT_LabelResponse' => '\\MondialRelay\\StructType\\WSI2_STAT_LabelResponse',
            'WSI2_STAT_Labels' => '\\MondialRelay\\StructType\\WSI2_STAT_Labels',
            'WSI2_STAT_LabelsResponse' => '\\MondialRelay\\StructType\\WSI2_STAT_LabelsResponse',
            'ArrayOfArrayOfString' => '\\MondialRelay\\ArrayType\\ArrayOfArrayOfString',
        );
    }
}
