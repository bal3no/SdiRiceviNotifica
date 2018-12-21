<?php

namespace SDICoop/SdiRiceviNotifica;

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
            'fileSdIBase_Type' => '\\SDICoop/SdiRiceviNotifica\\StructType\\FileSdIBase_Type',
            'fileSdI_Type' => '\\SDICoop/SdiRiceviNotifica\\StructType\\FileSdI_Type',
            'fileSdIConMetadati_Type' => '\\SDICoop/SdiRiceviNotifica\\StructType\\FileSdIConMetadati_Type',
            'rispostaRiceviFatture_Type' => '\\SDICoop/SdiRiceviNotifica\\StructType\\RispostaRiceviFatture_Type',
            'rispostaSdINotificaEsito_Type' => '\\SDICoop/SdiRiceviNotifica\\StructType\\RispostaSdINotificaEsito_Type',
        );
    }
}
