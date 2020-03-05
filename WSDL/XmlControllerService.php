<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class XmlControllerService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CoreLoginRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLoginRequest',
  'CoreLoginResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLoginResponse',
  'CoreLoginResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLoginResponseData',
  'stringArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\stringArray',
  'CoreLogoutRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLogoutRequest',
  'CoreLogoutResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLogoutResponse',
  'CoreSmthRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreSmthRequest',
  'CoreSmthResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreSmthResponse',
  'CashCreateOperationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateOperationRequest',
  'CashCreateOperationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateOperationResponse',
  'CashCreateOperationResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateOperationResponseData',
  'CashConfirmOperationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashConfirmOperationRequest',
  'CashConfirmOperationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashConfirmOperationResponse',
  'CashConfirmOperationExtRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashConfirmOperationExtRequest',
  'CashDischargementRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDischargementRequest',
  'CashDischargementResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDischargementResponse',
  'CashTransferRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashTransferRequest',
  'CashTransferResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashTransferResponse',
  'CashGetTransfersRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersRequest',
  'intArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\intArray',
  'CashGetTransfersResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponse',
  'CashGetTransfersResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseData',
  'CashGetTransfersResponseDataRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordArray',
  'CashGetTransfersResponseDataRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecord',
  'CashGetTransfersResponseDataRecordService' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordService',
  'CashGetCommissionRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetCommissionRequest',
  'CashGetCommissionResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetCommissionResponse',
  'CashGetCommissionResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetCommissionResponseData',
  'CoreGetServiceIDByNameRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetServiceIDByNameRequest',
  'CoreGetServiceIDByNameResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponse',
  'CoreGetServiceIDByNameResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponseData',
  'CashGetBalanceRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetBalanceRequest',
  'CashGetBalanceResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetBalanceResponse',
  'CashGetBalanceResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetBalanceResponseData',
  'ServiceGetCategoriesRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesRequest',
  'ServiceGetCategoriesResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponse',
  'ServiceGetCategoriesResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseData',
  'ServiceGetCategoriesResponseDataCategoriesArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategoriesArray',
  'ServiceGetCategoriesResponseDataCategories' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategories',
  'ServiceGetCategoriesResponseDataServicesArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServicesArray',
  'ServiceGetCategoriesResponseDataServices' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServices',
  'CashDeclineRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDeclineRequest',
  'CashDeclineResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDeclineResponse',
  'CashSetOperationsStatusRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusRequest',
  'CashSetOperationsStatusRequestRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecordArray',
  'CashSetOperationsStatusRequestRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecord',
  'CashSetOperationsStatusResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusResponse',
  'CashSetOperationsStatusResponseRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecordArray',
  'CashSetOperationsStatusResponseRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecord',
  'CashGetOperationsStatusRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusRequest',
  'CashGetOperationsStatusResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusResponse',
  'CashGetOperationsStatusResponseRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecordArray',
  'CashGetOperationsStatusResponseRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecord',
  'CashCashOutRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutRequest',
  'CashCashOutResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutResponse',
  'CashCashOutResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutResponseData',
  'CashCashOutCompleteRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutCompleteRequest',
  'CashCashOutCompleteResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutCompleteResponse',
  'CashCashOutInputDataRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutInputDataRequest',
  'CashCashOutInputDataResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutInputDataResponse',
  'CashReturnRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnRequest',
  'CashReturnResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnResponse',
  'CashReturnPartialRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnPartialRequest',
  'CashReturnPartialResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnPartialResponse',
  'CashMobileRefundRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashMobileRefundRequest',
  'CashMobileRefundResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashMobileRefundResponse',
  'CoreUserSearchRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserSearchRequest',
  'CoreUserSearchResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserSearchResponse',
  'CoreUserSearchResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserSearchResponseData',
  'SystemGetConfigRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\SystemGetConfigRequest',
  'SystemGetConfigResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\SystemGetConfigResponse',
  'SystemGetConfigResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\SystemGetConfigResponseData',
  'CashRequestTransferRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashRequestTransferRequest',
  'CashRequestTransferResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashRequestTransferResponse',
  'CashRequestTransferResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashRequestTransferResponseData',
  'CashInvoicingRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashInvoicingRequest',
  'CashInvoicingResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashInvoicingResponse',
  'CashInvoicingResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashInvoicingResponseData',
  'CashGetServiceFieldsRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsRequest',
  'CashGetServiceFieldsResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsResponse',
  'CashGetServiceFieldsResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsResponseData',
  'CashGetServiceFieldsExtendedRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsExtendedRequest',
  'CashCheckServiceFieldsRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCheckServiceFieldsRequest',
  'CashCheckServiceFieldsResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCheckServiceFieldsResponse',
  'CashCheckServiceFieldsResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCheckServiceFieldsResponseData',
  'CashGetOperationReceiptRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationReceiptRequest',
  'CashGetOperationReceiptResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationReceiptResponse',
  'CashGetOperationReceiptResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationReceiptResponseData',
  'CashGetOperationDataRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataRequest',
  'CashGetOperationDataResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponse',
  'CashGetOperationDataResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponseData',
  'CashGetOperationDataResponseDataRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecordArray',
  'CashGetOperationDataResponseDataRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecord',
  'CoreUserExistsRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserExistsRequest',
  'CoreUserExistsResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserExistsResponse',
  'CashCreateInvoiceRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceRequest',
  'CashCreateInvoiceResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceResponse',
  'CashCreateInvoiceResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceResponseData',
  'CashCreateInvoiceExtendedRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceExtendedRequest',
  'CashCreateInvoiceExtended2Request' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceExtended2Request',
  'CashCreateInvoiceByServiceRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceByServiceRequest',
  'CashCreateInvoiceWithCurrencyRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceWithCurrencyRequest',
  'CashPrepaidCardPerformRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardPerformRequest',
  'CashPrepaidCardPerformResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardPerformResponse',
  'CashPrepaidCardPerformResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardPerformResponseData',
  'CashPrepaidCardRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardRequest',
  'CashPrepaidCardRequestData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardRequestData',
  'CashPrepaidCardResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardResponse',
  'CashPrepaidCardResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardResponseData',
  'CashPrepaidCardCommissionRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardCommissionRequest',
  'CashPrepaidCardCommissionResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponse',
  'CashPrepaidCardCommissionResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponseData',
  'CreateOperation' => 'Sakhnovkrg\\Wooppay\\WSDL\\CreateOperation',
  'CreateOperationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CreateOperationResponse',
  'CreateOperationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CreateOperationRequest',
  'PayConfirmRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\PayConfirmRequest',
  'PayTransferConfirmRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\PayTransferConfirmRequest',
  'CoreRequestConfirmationCodeRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreRequestConfirmationCodeRequest',
  'CoreRequestConfirmationCodeResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreRequestConfirmationCodeResponse',
  'CoreBeelineSMSNotificationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreBeelineSMSNotificationRequest',
  'CoreBeelineSMSNotificationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreBeelineSMSNotificationResponse',
  'CoreKcellSMSNotificationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreKcellSMSNotificationRequest',
  'CoreKcellSMSNotificationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreKcellSMSNotificationResponse',
  'CashGetReceiptForTransactionRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetReceiptForTransactionRequest',
  'CashGetReceiptForTransactionResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponse',
  'CashGetReceiptForTransactionResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponseData',
  'CoreGetMobileOperatorRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetMobileOperatorRequest',
  'CoreGetMobileOperatorResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetMobileOperatorResponse',
  'CoreGetMobileOperatorResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetMobileOperatorResponseData',
  'CashGetOperationDataExtendedRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedRequest',
  'CashGetOperationDataExtendedResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponse',
  'CashGetOperationDataExtendedResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseData',
  'CashGetOperationDataExtendedResponseDataRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecordArray',
  'CashGetOperationDataExtendedResponseDataRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecord',
  'CashGetOperationDataByExtIdRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataByExtIdRequest',
  'CashGetOperationDataByExtIdResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponse',
  'CashGetOperationDataByExtIdResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponseData',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.wooppay.com/api/xml';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Login action
     *
     * @param CoreLoginRequest $coreLoginRequest
     * @return CoreLoginResponse
     */
    public function core_login(CoreLoginRequest $coreLoginRequest)
    {
      return $this->__soapCall('core_login', array($coreLoginRequest));
    }

    /**
     * Logout action
     *
     * @param CoreLogoutRequest $coreLogoutRequest
     * @return CoreLogoutResponse
     */
    public function core_logout(CoreLogoutRequest $coreLogoutRequest)
    {
      return $this->__soapCall('core_logout', array($coreLogoutRequest));
    }

    /**
     * Test action
     *
     * @param CoreSmthRequest $coreSmthRequest
     * @return CoreSmthResponse
     */
    public function core_smth(CoreSmthRequest $coreSmthRequest)
    {
      return $this->__soapCall('core_smth', array($coreSmthRequest));
    }

    /**
     * Create new money operation
     *
     * @param CashCreateOperationRequest $cashCreateOperationRequest
     * @return CashCreateOperationResponse
     */
    public function cash_createOperation(CashCreateOperationRequest $cashCreateOperationRequest)
    {
      return $this->__soapCall('cash_createOperation', array($cashCreateOperationRequest));
    }

    /**
     * Confirm money operation
     *
     * @param CashConfirmOperationRequest $cashConfirmOperationRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperation(CashConfirmOperationRequest $cashConfirmOperationRequest)
    {
      return $this->__soapCall('cash_confirmOperation', array($cashConfirmOperationRequest));
    }

    /**
     * Confirm money operation with confirmation code
     *
     * @param CashConfirmOperationExtRequest $cashConfirmOperationExtRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperationExt(CashConfirmOperationExtRequest $cashConfirmOperationExtRequest)
    {
      return $this->__soapCall('cash_confirmOperationExt', array($cashConfirmOperationExtRequest));
    }

    /**
     * Dischargement money
     *
     * @param CashDischargementRequest $cashDischargementRequest
     * @return CashDischargementResponse
     */
    public function cash_dischargement(CashDischargementRequest $cashDischargementRequest)
    {
      return $this->__soapCall('cash_dischargement', array($cashDischargementRequest));
    }

    /**
     * Transfer money
     *
     * @param CashTransferRequest $cashTransferRequest
     * @return CashTransferResponse
     */
    public function cash_transfer(CashTransferRequest $cashTransferRequest)
    {
      return $this->__soapCall('cash_transfer', array($cashTransferRequest));
    }

    /**
     * Get transfer/payment list
     *
     * @param CashGetTransfersRequest $cashGetTransfersRequest
     * @return CashGetTransfersResponse
     */
    public function cash_getTransfers(CashGetTransfersRequest $cashGetTransfersRequest)
    {
      return $this->__soapCall('cash_getTransfers', array($cashGetTransfersRequest));
    }

    /**
     * Get commission
     *
     * @param CashGetCommissionRequest $cashGetCommissionRequest
     * @return CashGetCommissionResponse
     */
    public function cash_getCommission(CashGetCommissionRequest $cashGetCommissionRequest)
    {
      return $this->__soapCall('cash_getCommission', array($cashGetCommissionRequest));
    }

    /**
     * Get service id
     *
     * @param CoreGetServiceIDByNameRequest $cashGetServiceIDByNameRequest
     * @return CoreGetServiceIDByNameResponse
     */
    public function core_getServiceIDByName(CoreGetServiceIDByNameRequest $cashGetServiceIDByNameRequest)
    {
      return $this->__soapCall('core_getServiceIDByName', array($cashGetServiceIDByNameRequest));
    }

    /**
     * @param CashGetBalanceRequest $cashGetBalanceRequest
     * @return CashGetBalanceResponse
     */
    public function cash_getBalance(CashGetBalanceRequest $cashGetBalanceRequest)
    {
      return $this->__soapCall('cash_getBalance', array($cashGetBalanceRequest));
    }

    /**
     * get categories
     *
     * @param ServiceGetCategoriesRequest $serviceGetCategoriesRequest
     * @return ServiceGetCategoriesResponse
     */
    public function service_getCategories(ServiceGetCategoriesRequest $serviceGetCategoriesRequest)
    {
      return $this->__soapCall('service_getCategories', array($serviceGetCategoriesRequest));
    }

    /**
     * Cancels/declines operation
     *
     * @param CashDeclineRequest $cashDeclineRequest
     * @return CashDeclineResponse
     */
    public function cash_decline(CashDeclineRequest $cashDeclineRequest)
    {
      return $this->__soapCall('cash_decline', array($cashDeclineRequest));
    }

    /**
     * Set operations status
     *
     * @param CashSetOperationsStatusRequest $cashSetOperationsStatusRequest
     * @return CashSetOperationsStatusResponse
     */
    public function cash_setOperationsStatus(CashSetOperationsStatusRequest $cashSetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_setOperationsStatus', array($cashSetOperationsStatusRequest));
    }

    /**
     * Get operations status
     *
     * @param CashGetOperationsStatusRequest $cashGetOperationsStatusRequest
     * @return CashGetOperationsStatusResponse
     */
    public function cash_getOperationsStatus(CashGetOperationsStatusRequest $cashGetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_getOperationsStatus', array($cashGetOperationsStatusRequest));
    }

    /**
     * Cash out
     *
     * @param CashCashOutRequest $cashCashOutRequest
     * @return CashCashOutResponse
     */
    public function cash_cashOut(CashCashOutRequest $cashCashOutRequest)
    {
      return $this->__soapCall('cash_cashOut', array($cashCashOutRequest));
    }

    /**
     * Cash out complete
     *
     * @param CashCashOutCompleteRequest $cashCashOutCompleteRequest
     * @return CashCashOutCompleteResponse
     */
    public function cash_cashOutComplete(CashCashOutCompleteRequest $cashCashOutCompleteRequest)
    {
      return $this->__soapCall('cash_cashOutComplete', array($cashCashOutCompleteRequest));
    }

    /**
     * Cash out input data
     *
     * @param CashCashOutInputDataRequest $cashCashOutInputDataRequest
     * @return CashCashOutInputDataResponse
     */
    public function cash_cashOutInputData(CashCashOutInputDataRequest $cashCashOutInputDataRequest)
    {
      return $this->__soapCall('cash_cashOutInputData', array($cashCashOutInputDataRequest));
    }

    /**
     * Return payment operation
     *
     * @param CashReturnRequest $cashReturnRequest
     * @return CashReturnResponse
     */
    public function cash_paymentReturn(CashReturnRequest $cashReturnRequest)
    {
      return $this->__soapCall('cash_paymentReturn', array($cashReturnRequest));
    }

    /**
     * Partial return payment operation
     *
     * @param CashReturnPartialRequest $cashReturnPartialRequest
     * @return CashReturnPartialResponse
     */
    public function cash_paymentReturnPartial(CashReturnPartialRequest $cashReturnPartialRequest)
    {
      return $this->__soapCall('cash_paymentReturnPartial', array($cashReturnPartialRequest));
    }

    /**
     * Refund mobile payment operation
     *
     * @param CashMobileRefundRequest $cashMobileRefundRequest
     * @return CashMobileRefundResponse
     */
    public function cash_mobileRefund(CashMobileRefundRequest $cashMobileRefundRequest)
    {
      return $this->__soapCall('cash_mobileRefund', array($cashMobileRefundRequest));
    }

    /**
     * User search
     *
     * @param CoreUserSearchRequest $coreUserSearchRequest
     * @return CoreUserSearchResponse
     */
    public function core_userSearch(CoreUserSearchRequest $coreUserSearchRequest)
    {
      return $this->__soapCall('core_userSearch', array($coreUserSearchRequest));
    }

    /**
     * Get system config
     *
     * @param SystemGetConfigRequest $systemGetConfigRequest
     * @return SystemGetConfigResponse
     */
    public function system_getConfig(SystemGetConfigRequest $systemGetConfigRequest)
    {
      return $this->__soapCall('system_getConfig', array($systemGetConfigRequest));
    }

    /**
     * Send transfer request
     *
     * @param CashRequestTransferRequest $cashRequestTransferRequest
     * @return CashRequestTransferResponse
     */
    public function cash_requestTransfer(CashRequestTransferRequest $cashRequestTransferRequest)
    {
      return $this->__soapCall('cash_requestTransfer', array($cashRequestTransferRequest));
    }

    /**
     * Send invoice
     *
     * @param CashInvoicingRequest $cashInvoicingRequest
     * @return CashInvoicingResponse
     */
    public function cash_invoicing(CashInvoicingRequest $cashInvoicingRequest)
    {
      return $this->__soapCall('cash_invoicing', array($cashInvoicingRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsRequest $cashGetServiceFieldsRequest
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFields(CashGetServiceFieldsRequest $cashGetServiceFieldsRequest)
    {
      return $this->__soapCall('cash_getServiceFields', array($cashGetServiceFieldsRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsExtendedRequest $cashGetServiceFieldsExtended
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFieldsExtended(CashGetServiceFieldsExtendedRequest $cashGetServiceFieldsExtended)
    {
      return $this->__soapCall('cash_getServiceFieldsExtended', array($cashGetServiceFieldsExtended));
    }

    /**
     * Check service fields
     *
     * @param CashCheckServiceFieldsRequest $cashCheckServiceFieldsRequest
     * @return CashCheckServiceFieldsResponse
     */
    public function cash_checkServiceFields(CashCheckServiceFieldsRequest $cashCheckServiceFieldsRequest)
    {
      return $this->__soapCall('cash_checkServiceFields', array($cashCheckServiceFieldsRequest));
    }

    /**
     * Get operation receipt
     *
     * @param CashGetOperationReceiptRequest $cashGetOperationReceiptRequest
     * @return CashGetOperationReceiptResponse
     */
    public function cash_getOperationReceipt(CashGetOperationReceiptRequest $cashGetOperationReceiptRequest)
    {
      return $this->__soapCall('cash_getOperationReceipt', array($cashGetOperationReceiptRequest));
    }

    /**
     * @param CashGetOperationDataRequest $cashGetOperationDataRequest
     * @return CashGetOperationDataResponse
     */
    public function cash_getOperationData(CashGetOperationDataRequest $cashGetOperationDataRequest)
    {
      return $this->__soapCall('cash_getOperationData', array($cashGetOperationDataRequest));
    }

    /**
     * User existing checking
     *
     * @param CoreUserExistsRequest $coreUserExistsRequest
     * @return CoreUserExistsResponse
     */
    public function core_userExists(CoreUserExistsRequest $coreUserExistsRequest)
    {
      return $this->__soapCall('core_userExists', array($coreUserExistsRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceRequest $cashCreateInvoiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice(CashCreateInvoiceRequest $cashCreateInvoiceRequest)
    {
      return $this->__soapCall('cash_createInvoice', array($cashCreateInvoiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtendedRequest $cashCreateInvoiceExtendedRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceExtended(CashCreateInvoiceExtendedRequest $cashCreateInvoiceExtendedRequest)
    {
      return $this->__soapCall('cash_createInvoiceExtended', array($cashCreateInvoiceExtendedRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtended2Request $cashCreateInvoiceExtended2Request
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice2Extended(CashCreateInvoiceExtended2Request $cashCreateInvoiceExtended2Request)
    {
      return $this->__soapCall('cash_createInvoice2Extended', array($cashCreateInvoiceExtended2Request));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceByServiceRequest $cashCreateInvoiceByServiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceByService(CashCreateInvoiceByServiceRequest $cashCreateInvoiceByServiceRequest)
    {
      return $this->__soapCall('cash_createInvoiceByService', array($cashCreateInvoiceByServiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceWithCurrencyRequest $cashCreateInvoiceWithCurrencyRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceWithCurrency(CashCreateInvoiceWithCurrencyRequest $cashCreateInvoiceWithCurrencyRequest)
    {
      return $this->__soapCall('cash_createInvoiceWithCurrency', array($cashCreateInvoiceWithCurrencyRequest));
    }

    /**
     * prepaid card perform
     *
     * @param CashPrepaidCardPerformRequest $cashPrepaidCardPerformRequest
     * @return CashPrepaidCardPerformResponse
     */
    public function cash_prepaidCardPerform(CashPrepaidCardPerformRequest $cashPrepaidCardPerformRequest)
    {
      return $this->__soapCall('cash_prepaidCardPerform', array($cashPrepaidCardPerformRequest));
    }

    /**
     * prepaid card
     *
     * @param CashPrepaidCardRequest $cashPrepaidCardRequest
     * @return CashPrepaidCardResponse
     */
    public function cash_prepaidCard(CashPrepaidCardRequest $cashPrepaidCardRequest)
    {
      return $this->__soapCall('cash_prepaidCard', array($cashPrepaidCardRequest));
    }

    /**
     * prepaid card get commission
     *
     * @param CashPrepaidCardCommissionRequest $cashPrepaidCardCommissionRequest
     * @return CashPrepaidCardCommissionResponse
     */
    public function cash_prepaidCardCommission(CashPrepaidCardCommissionRequest $cashPrepaidCardCommissionRequest)
    {
      return $this->__soapCall('cash_prepaidCardCommission', array($cashPrepaidCardCommissionRequest));
    }

    /**
     * @param CreateOperation $createOperation
     * @return CreateOperationResponse
     */
    public function createOperation(CreateOperation $createOperation)
    {
      return $this->__soapCall('createOperation', array($createOperation));
    }

    /**
     * @param CreateOperationRequest $createOperation
     * @return CreateOperationResponse
     */
    public function createOperationFake(CreateOperationRequest $createOperation)
    {
      return $this->__soapCall('createOperationFake', array($createOperation));
    }

    /**
     * @param PayConfirmRequest $PayConfirmRequest
     * @return CreateOperationResponse
     */
    public function payConfirm(PayConfirmRequest $PayConfirmRequest)
    {
      return $this->__soapCall('payConfirm', array($PayConfirmRequest));
    }

    /**
     * @param PayTransferConfirmRequest $PayTransferConfirmRequest
     * @return CreateOperationResponse
     */
    public function payTransferConfirm(PayTransferConfirmRequest $PayTransferConfirmRequest)
    {
      return $this->__soapCall('payTransferConfirm', array($PayTransferConfirmRequest));
    }

    /**
     * @param CoreRequestConfirmationCodeRequest $coreRequestConfirmationCodeRequest
     * @return CoreRequestConfirmationCodeResponse
     */
    public function core_requestConfirmationCode(CoreRequestConfirmationCodeRequest $coreRequestConfirmationCodeRequest)
    {
      return $this->__soapCall('core_requestConfirmationCode', array($coreRequestConfirmationCodeRequest));
    }

    /**
     * @param CoreBeelineSMSNotificationRequest $coreBeelineSMSNotificationRequest
     * @return CoreBeelineSMSNotificationResponse
     */
    public function core_beelineSMSNotification(CoreBeelineSMSNotificationRequest $coreBeelineSMSNotificationRequest)
    {
      return $this->__soapCall('core_beelineSMSNotification', array($coreBeelineSMSNotificationRequest));
    }

    /**
     * @param CoreKcellSMSNotificationRequest $coreKcellSMSNotificationRequest
     * @return CoreKcellSMSNotificationResponse
     */
    public function core_kcellSMSNotification(CoreKcellSMSNotificationRequest $coreKcellSMSNotificationRequest)
    {
      return $this->__soapCall('core_kcellSMSNotification', array($coreKcellSMSNotificationRequest));
    }

    /**
     * Get operation receipt by Oberthur MFS id
     *
     * @param CashGetReceiptForTransactionRequest $cashGetReceiptForTransactionRequest
     * @return CashGetReceiptForTransactionResponse
     */
    public function cash_getReceiptForTransaction(CashGetReceiptForTransactionRequest $cashGetReceiptForTransactionRequest)
    {
      return $this->__soapCall('cash_getReceiptForTransaction', array($cashGetReceiptForTransactionRequest));
    }

    /**
     * @param CoreGetMobileOperatorRequest $coreGetMobileOperatorRequest
     * @return CoreGetMobileOperatorResponse
     */
    public function core_getMobileOperator(CoreGetMobileOperatorRequest $coreGetMobileOperatorRequest)
    {
      return $this->__soapCall('core_getMobileOperator', array($coreGetMobileOperatorRequest));
    }

    /**
     * @param CashGetOperationDataExtendedRequest $cashGetOperationDataExtendedRequest
     * @return CashGetOperationDataExtendedResponse
     */
    public function cash_getOperationDataExtended(CashGetOperationDataExtendedRequest $cashGetOperationDataExtendedRequest)
    {
      return $this->__soapCall('cash_getOperationDataExtended', array($cashGetOperationDataExtendedRequest));
    }

    /**
     * @param CashGetOperationDataByExtIdRequest $cashGetOperationDataByExtIdRequest
     * @return CashGetOperationDataByExtIdResponse
     */
    public function cash_getOperationDataByExtId(CashGetOperationDataByExtIdRequest $cashGetOperationDataByExtIdRequest)
    {
      return $this->__soapCall('cash_getOperationDataByExtId', array($cashGetOperationDataByExtIdRequest));
    }

}
