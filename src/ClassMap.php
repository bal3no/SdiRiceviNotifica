<?php

namespace SDICoop\SdIRiceviNotifica;

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
            'fileSdIBase_Type' => '\\SDICoop\\SdIRiceviNotifica\\StructType\\FileSdIBase_Type',
            'fileSdI_Type' => '\\SDICoop\\SdIRiceviNotifica\\StructType\\FileSdI_Type',
            'fileSdIConMetadati_Type' => '\\SDICoop\\SdIRiceviNotifica\\StructType\\FileSdIConMetadati_Type',
            'rispostaRiceviFatture_Type' => '\\SDICoop\\SdIRiceviNotifica\\StructType\\RispostaRiceviFatture_Type',
            'rispostaSdINotificaEsito_Type' => '\\SDICoop\\SdIRiceviNotifica\\StructType\\RispostaSdINotificaEsito_Type',
        );
    }
}
