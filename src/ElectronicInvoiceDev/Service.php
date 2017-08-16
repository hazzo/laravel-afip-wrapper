<?php

include_once('FECAESolicitar.php');
include_once('FEAuthRequest.php');
include_once('FECAERequest.php');
include_once('FECAECabRequest.php');
include_once('FECabRequest.php');
include_once('FECAEDetRequest.php');
include_once('FEDetRequest.php');
include_once('CbteAsoc.php');
include_once('Tributo.php');
include_once('AlicIva.php');
include_once('Opcional.php');
include_once('FECAESolicitarResponse.php');
include_once('FECAEResponse.php');
include_once('FECAECabResponse.php');
include_once('FECabResponse.php');
include_once('FECAEDetResponse.php');
include_once('FEDetResponse.php');
include_once('Obs.php');
include_once('Evt.php');
include_once('Err.php');
include_once('FECompTotXRequest.php');
include_once('FECompTotXRequestResponse.php');
include_once('FERegXReqResponse.php');
include_once('FEDummy.php');
include_once('FEDummyResponse.php');
include_once('DummyResponse.php');
include_once('FECompUltimoAutorizado.php');
include_once('FECompUltimoAutorizadoResponse.php');
include_once('FERecuperaLastCbteResponse.php');
include_once('FECompConsultar.php');
include_once('FECompConsultaReq.php');
include_once('FECompConsultarResponse.php');
include_once('FECompConsultaResponse.php');
include_once('FECompConsResponse.php');
include_once('FECAEARegInformativo.php');
include_once('FECAEARequest.php');
include_once('FECAEACabRequest.php');
include_once('FECAEADetRequest.php');
include_once('FECAEARegInformativoResponse.php');
include_once('FECAEAResponse.php');
include_once('FECAEACabResponse.php');
include_once('FECAEADetResponse.php');
include_once('FECAEASolicitar.php');
include_once('FECAEASolicitarResponse.php');
include_once('FECAEAGetResponse.php');
include_once('FECAEAGet.php');
include_once('FECAEASinMovimientoConsultar.php');
include_once('FECAEASinMovimientoConsultarResponse.php');
include_once('FECAEASinMovConsResponse.php');
include_once('FECAEASinMov.php');
include_once('FECAEASinMovimientoInformar.php');
include_once('FECAEASinMovimientoInformarResponse.php');
include_once('FECAEASinMovResponse.php');
include_once('FECAEAConsultar.php');
include_once('FECAEAConsultarResponse.php');
include_once('FEParamGetCotizacion.php');
include_once('FEParamGetCotizacionResponse.php');
include_once('FECotizacionResponse.php');
include_once('Cotizacion.php');
include_once('FEParamGetTiposTributos.php');
include_once('FEParamGetTiposTributosResponse.php');
include_once('FETributoResponse.php');
include_once('TributoTipo.php');
include_once('FEParamGetTiposMonedas.php');
include_once('FEParamGetTiposMonedasResponse.php');
include_once('MonedaResponse.php');
include_once('Moneda.php');
include_once('FEParamGetTiposIva.php');
include_once('FEParamGetTiposIvaResponse.php');
include_once('IvaTipoResponse.php');
include_once('IvaTipo.php');
include_once('FEParamGetTiposOpcional.php');
include_once('FEParamGetTiposOpcionalResponse.php');
include_once('OpcionalTipoResponse.php');
include_once('OpcionalTipo.php');
include_once('FEParamGetTiposConcepto.php');
include_once('FEParamGetTiposConceptoResponse.php');
include_once('ConceptoTipoResponse.php');
include_once('ConceptoTipo.php');
include_once('FEParamGetPtosVenta.php');
include_once('FEParamGetPtosVentaResponse.php');
include_once('FEPtoVentaResponse.php');
include_once('PtoVenta.php');
include_once('FEParamGetTiposCbte.php');
include_once('FEParamGetTiposCbteResponse.php');
include_once('CbteTipoResponse.php');
include_once('CbteTipo.php');
include_once('FEParamGetTiposDoc.php');
include_once('FEParamGetTiposDocResponse.php');
include_once('DocTipoResponse.php');
include_once('DocTipo.php');
include_once('FEParamGetTiposPaises.php');
include_once('FEParamGetTiposPaisesResponse.php');
include_once('FEPaisResponse.php');
include_once('PaisTipo.php');


/**
 * Web Service orientado  al  servicio  de Facturacion electronica RG2485 V1
 */
class Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'FECAESolicitar' => '\FECAESolicitar',
      'FEAuthRequest' => '\FEAuthRequest',
      'FECAERequest' => '\FECAERequest',
      'FECAECabRequest' => '\FECAECabRequest',
      'FECabRequest' => '\FECabRequest',
      'FECAEDetRequest' => '\FECAEDetRequest',
      'FEDetRequest' => '\FEDetRequest',
      'CbteAsoc' => '\CbteAsoc',
      'Tributo' => '\Tributo',
      'AlicIva' => '\AlicIva',
      'Opcional' => '\Opcional',
      'FECAESolicitarResponse' => '\FECAESolicitarResponse',
      'FECAEResponse' => '\FECAEResponse',
      'FECAECabResponse' => '\FECAECabResponse',
      'FECabResponse' => '\FECabResponse',
      'FECAEDetResponse' => '\FECAEDetResponse',
      'FEDetResponse' => '\FEDetResponse',
      'Obs' => '\Obs',
      'Evt' => '\Evt',
      'Err' => '\Err',
      'FECompTotXRequest' => '\FECompTotXRequest',
      'FECompTotXRequestResponse' => '\FECompTotXRequestResponse',
      'FERegXReqResponse' => '\FERegXReqResponse',
      'FEDummy' => '\FEDummy',
      'FEDummyResponse' => '\FEDummyResponse',
      'DummyResponse' => '\DummyResponse',
      'FECompUltimoAutorizado' => '\FECompUltimoAutorizado',
      'FECompUltimoAutorizadoResponse' => '\FECompUltimoAutorizadoResponse',
      'FERecuperaLastCbteResponse' => '\FERecuperaLastCbteResponse',
      'FECompConsultar' => '\FECompConsultar',
      'FECompConsultaReq' => '\FECompConsultaReq',
      'FECompConsultarResponse' => '\FECompConsultarResponse',
      'FECompConsultaResponse' => '\FECompConsultaResponse',
      'FECompConsResponse' => '\FECompConsResponse',
      'FECAEARegInformativo' => '\FECAEARegInformativo',
      'FECAEARequest' => '\FECAEARequest',
      'FECAEACabRequest' => '\FECAEACabRequest',
      'FECAEADetRequest' => '\FECAEADetRequest',
      'FECAEARegInformativoResponse' => '\FECAEARegInformativoResponse',
      'FECAEAResponse' => '\FECAEAResponse',
      'FECAEACabResponse' => '\FECAEACabResponse',
      'FECAEADetResponse' => '\FECAEADetResponse',
      'FECAEASolicitar' => '\FECAEASolicitar',
      'FECAEASolicitarResponse' => '\FECAEASolicitarResponse',
      'FECAEAGetResponse' => '\FECAEAGetResponse',
      'FECAEAGet' => '\FECAEAGet',
      'FECAEASinMovimientoConsultar' => '\FECAEASinMovimientoConsultar',
      'FECAEASinMovimientoConsultarResponse' => '\FECAEASinMovimientoConsultarResponse',
      'FECAEASinMovConsResponse' => '\FECAEASinMovConsResponse',
      'FECAEASinMov' => '\FECAEASinMov',
      'FECAEASinMovimientoInformar' => '\FECAEASinMovimientoInformar',
      'FECAEASinMovimientoInformarResponse' => '\FECAEASinMovimientoInformarResponse',
      'FECAEASinMovResponse' => '\FECAEASinMovResponse',
      'FECAEAConsultar' => '\FECAEAConsultar',
      'FECAEAConsultarResponse' => '\FECAEAConsultarResponse',
      'FEParamGetCotizacion' => '\FEParamGetCotizacion',
      'FEParamGetCotizacionResponse' => '\FEParamGetCotizacionResponse',
      'FECotizacionResponse' => '\FECotizacionResponse',
      'Cotizacion' => '\Cotizacion',
      'FEParamGetTiposTributos' => '\FEParamGetTiposTributos',
      'FEParamGetTiposTributosResponse' => '\FEParamGetTiposTributosResponse',
      'FETributoResponse' => '\FETributoResponse',
      'TributoTipo' => '\TributoTipo',
      'FEParamGetTiposMonedas' => '\FEParamGetTiposMonedas',
      'FEParamGetTiposMonedasResponse' => '\FEParamGetTiposMonedasResponse',
      'MonedaResponse' => '\MonedaResponse',
      'Moneda' => '\Moneda',
      'FEParamGetTiposIva' => '\FEParamGetTiposIva',
      'FEParamGetTiposIvaResponse' => '\FEParamGetTiposIvaResponse',
      'IvaTipoResponse' => '\IvaTipoResponse',
      'IvaTipo' => '\IvaTipo',
      'FEParamGetTiposOpcional' => '\FEParamGetTiposOpcional',
      'FEParamGetTiposOpcionalResponse' => '\FEParamGetTiposOpcionalResponse',
      'OpcionalTipoResponse' => '\OpcionalTipoResponse',
      'OpcionalTipo' => '\OpcionalTipo',
      'FEParamGetTiposConcepto' => '\FEParamGetTiposConcepto',
      'FEParamGetTiposConceptoResponse' => '\FEParamGetTiposConceptoResponse',
      'ConceptoTipoResponse' => '\ConceptoTipoResponse',
      'ConceptoTipo' => '\ConceptoTipo',
      'FEParamGetPtosVenta' => '\FEParamGetPtosVenta',
      'FEParamGetPtosVentaResponse' => '\FEParamGetPtosVentaResponse',
      'FEPtoVentaResponse' => '\FEPtoVentaResponse',
      'PtoVenta' => '\PtoVenta',
      'FEParamGetTiposCbte' => '\FEParamGetTiposCbte',
      'FEParamGetTiposCbteResponse' => '\FEParamGetTiposCbteResponse',
      'CbteTipoResponse' => '\CbteTipoResponse',
      'CbteTipo' => '\CbteTipo',
      'FEParamGetTiposDoc' => '\FEParamGetTiposDoc',
      'FEParamGetTiposDocResponse' => '\FEParamGetTiposDocResponse',
      'DocTipoResponse' => '\DocTipoResponse',
      'DocTipo' => '\DocTipo',
      'FEParamGetTiposPaises' => '\FEParamGetTiposPaises',
      'FEParamGetTiposPaisesResponse' => '\FEParamGetTiposPaisesResponse',
      'FEPaisResponse' => '\FEPaisResponse',
      'PaisTipo' => '\PaisTipo');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://wswhomo.afip.gov.ar/wsfev1/service.asmx?WSDL')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * Solicitud de Código de Autorización Electrónico (CAE)
     *
     * @param FECAESolicitar $parameters
     * @access public
     * @return FECAESolicitarResponse
     */
    public function FECAESolicitar(FECAESolicitar $parameters)
    {
      return $this->__soapCall('FECAESolicitar', array($parameters));
    }

    /**
     * Retorna la cantidad maxima de registros que puede tener una invocacion al metodo FECAESolicitar / FECAEARegInformativo
     *
     * @param FECompTotXRequest $parameters
     * @access public
     * @return FECompTotXRequestResponse
     */
    public function FECompTotXRequest(FECompTotXRequest $parameters)
    {
      return $this->__soapCall('FECompTotXRequest', array($parameters));
    }

    /**
     * Metodo dummy para verificacion de funcionamiento
     *
     * @param FEDummy $parameters
     * @access public
     * @return FEDummyResponse
     */
    public function FEDummy(FEDummy $parameters)
    {
      return $this->__soapCall('FEDummy', array($parameters));
    }

    /**
     * Retorna el ultimo comprobante autorizado para el tipo de comprobante / cuit / punto de venta ingresado / Tipo de Emisión
     *
     * @param FECompUltimoAutorizado $parameters
     * @access public
     * @return FECompUltimoAutorizadoResponse
     */
    public function FECompUltimoAutorizado(FECompUltimoAutorizado $parameters)
    {
      return $this->__soapCall('FECompUltimoAutorizado', array($parameters));
    }

    /**
     * Consulta Comprobante emitido y su código.
     *
     * @param FECompConsultar $parameters
     * @access public
     * @return FECompConsultarResponse
     */
    public function FECompConsultar(FECompConsultar $parameters)
    {
      return $this->__soapCall('FECompConsultar', array($parameters));
    }

    /**
     * Rendición de comprobantes asociados a un CAEA.
     *
     * @param FECAEARegInformativo $parameters
     * @access public
     * @return FECAEARegInformativoResponse
     */
    public function FECAEARegInformativo(FECAEARegInformativo $parameters)
    {
      return $this->__soapCall('FECAEARegInformativo', array($parameters));
    }

    /**
     * Solicitud de Código de Autorización Electrónico Anticipado (CAEA)
     *
     * @param FECAEASolicitar $parameters
     * @access public
     * @return FECAEASolicitarResponse
     */
    public function FECAEASolicitar(FECAEASolicitar $parameters)
    {
      return $this->__soapCall('FECAEASolicitar', array($parameters));
    }

    /**
     * Consulta CAEA informado como sin movimientos.
     *
     * @param FECAEASinMovimientoConsultar $parameters
     * @access public
     * @return FECAEASinMovimientoConsultarResponse
     */
    public function FECAEASinMovimientoConsultar(FECAEASinMovimientoConsultar $parameters)
    {
      return $this->__soapCall('FECAEASinMovimientoConsultar', array($parameters));
    }

    /**
     * Informa CAEA sin movimientos.
     *
     * @param FECAEASinMovimientoInformar $parameters
     * @access public
     * @return FECAEASinMovimientoInformarResponse
     */
    public function FECAEASinMovimientoInformar(FECAEASinMovimientoInformar $parameters)
    {
      return $this->__soapCall('FECAEASinMovimientoInformar', array($parameters));
    }

    /**
     * Consultar CAEA emitidos.
     *
     * @param FECAEAConsultar $parameters
     * @access public
     * @return FECAEAConsultarResponse
     */
    public function FECAEAConsultar(FECAEAConsultar $parameters)
    {
      return $this->__soapCall('FECAEAConsultar', array($parameters));
    }

    /**
     * Recupera la cotizacion de la moneda consultada y su  fecha
     *
     * @param FEParamGetCotizacion $parameters
     * @access public
     * @return FEParamGetCotizacionResponse
     */
    public function FEParamGetCotizacion(FEParamGetCotizacion $parameters)
    {
      return $this->__soapCall('FEParamGetCotizacion', array($parameters));
    }

    /**
     * Recupera el listado de los diferente tributos que pueden ser utilizados  en el servicio de autorizacion
     *
     * @param FEParamGetTiposTributos $parameters
     * @access public
     * @return FEParamGetTiposTributosResponse
     */
    public function FEParamGetTiposTributos(FEParamGetTiposTributos $parameters)
    {
      return $this->__soapCall('FEParamGetTiposTributos', array($parameters));
    }

    /**
     * Recupera el listado de monedas utilizables en servicio de autorización
     *
     * @param FEParamGetTiposMonedas $parameters
     * @access public
     * @return FEParamGetTiposMonedasResponse
     */
    public function FEParamGetTiposMonedas(FEParamGetTiposMonedas $parameters)
    {
      return $this->__soapCall('FEParamGetTiposMonedas', array($parameters));
    }

    /**
     * Recupera el listado  de Tipos de Iva utilizables en servicio de autorización.
     *
     * @param FEParamGetTiposIva $parameters
     * @access public
     * @return FEParamGetTiposIvaResponse
     */
    public function FEParamGetTiposIva(FEParamGetTiposIva $parameters)
    {
      return $this->__soapCall('FEParamGetTiposIva', array($parameters));
    }

    /**
     * Recupera el listado de identificadores para los campos Opcionales
     *
     * @param FEParamGetTiposOpcional $parameters
     * @access public
     * @return FEParamGetTiposOpcionalResponse
     */
    public function FEParamGetTiposOpcional(FEParamGetTiposOpcional $parameters)
    {
      return $this->__soapCall('FEParamGetTiposOpcional', array($parameters));
    }

    /**
     * Recupera el listado  de identificadores para el campo Concepto.
     *
     * @param FEParamGetTiposConcepto $parameters
     * @access public
     * @return FEParamGetTiposConceptoResponse
     */
    public function FEParamGetTiposConcepto(FEParamGetTiposConcepto $parameters)
    {
      return $this->__soapCall('FEParamGetTiposConcepto', array($parameters));
    }

    /**
     * Recupera el listado de puntos de venta registrados y su estado
     *
     * @param FEParamGetPtosVenta $parameters
     * @access public
     * @return FEParamGetPtosVentaResponse
     */
    public function FEParamGetPtosVenta(FEParamGetPtosVenta $parameters)
    {
      return $this->__soapCall('FEParamGetPtosVenta', array($parameters));
    }

    /**
     * Recupera el listado  de Tipos de Comprobantes utilizables en servicio de autorización.
     *
     * @param FEParamGetTiposCbte $parameters
     * @access public
     * @return FEParamGetTiposCbteResponse
     */
    public function FEParamGetTiposCbte(FEParamGetTiposCbte $parameters)
    {
      return $this->__soapCall('FEParamGetTiposCbte', array($parameters));
    }

    /**
     * Recupera el listado  de Tipos de Documentos utilizables en servicio de autorización.
     *
     * @param FEParamGetTiposDoc $parameters
     * @access public
     * @return FEParamGetTiposDocResponse
     */
    public function FEParamGetTiposDoc(FEParamGetTiposDoc $parameters)
    {
      return $this->__soapCall('FEParamGetTiposDoc', array($parameters));
    }

    /**
     * Recupera el listado de los diferente paises que pueden ser utilizados  en el servicio de autorizacion
     *
     * @param FEParamGetTiposPaises $parameters
     * @access public
     * @return FEParamGetTiposPaisesResponse
     */
    public function FEParamGetTiposPaises(FEParamGetTiposPaises $parameters)
    {
      return $this->__soapCall('FEParamGetTiposPaises', array($parameters));
    }

}
