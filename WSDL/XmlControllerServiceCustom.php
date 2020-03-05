<?php

namespace Sakhnovkrg\Wooppay\WSDL;

class XmlControllerServiceCustom extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CoreLoginRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLoginRequestCustom',
  'CoreLoginResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLoginResponseCustom',
  'CoreLoginResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLoginResponseDataCustom',
  'stringArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\stringArrayCustom',
  'CoreLogoutRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLogoutRequestCustom',
  'CoreLogoutResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreLogoutResponseCustom',
  'CoreSmthRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreSmthRequestCustom',
  'CoreSmthResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreSmthResponseCustom',
  'CashCreateOperationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateOperationRequestCustom',
  'CashCreateOperationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateOperationResponseCustom',
  'CashCreateOperationResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateOperationResponseDataCustom',
  'CashConfirmOperationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashConfirmOperationRequestCustom',
  'CashConfirmOperationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashConfirmOperationResponseCustom',
  'CashConfirmOperationExtRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashConfirmOperationExtRequestCustom',
  'CashDischargementRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDischargementRequestCustom',
  'CashDischargementResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDischargementResponseCustom',
  'CashTransferRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashTransferRequestCustom',
  'CashTransferResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashTransferResponseCustom',
  'CashGetTransfersRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersRequestCustom',
  'intArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\intArrayCustom',
  'CashGetTransfersResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseCustom',
  'CashGetTransfersResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseDataCustom',
  'CashGetTransfersResponseDataRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordArrayCustom',
  'CashGetTransfersResponseDataRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordCustom',
  'CashGetTransfersResponseDataRecordService' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordServiceCustom',
  'CashGetCommissionRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetCommissionRequestCustom',
  'CashGetCommissionResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetCommissionResponseCustom',
  'CashGetCommissionResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetCommissionResponseDataCustom',
  'CoreGetServiceIDByNameRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetServiceIDByNameRequestCustom',
  'CoreGetServiceIDByNameResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponseCustom',
  'CoreGetServiceIDByNameResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponseDataCustom',
  'CashGetBalanceRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetBalanceRequestCustom',
  'CashGetBalanceResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetBalanceResponseCustom',
  'CashGetBalanceResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetBalanceResponseDataCustom',
  'ServiceGetCategoriesRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesRequestCustom',
  'ServiceGetCategoriesResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseCustom',
  'ServiceGetCategoriesResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCustom',
  'ServiceGetCategoriesResponseDataCategoriesArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategoriesArrayCustom',
  'ServiceGetCategoriesResponseDataCategories' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategoriesCustom',
  'ServiceGetCategoriesResponseDataServicesArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServicesArrayCustom',
  'ServiceGetCategoriesResponseDataServices' => 'Sakhnovkrg\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServicesCustom',
  'CashDeclineRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDeclineRequestCustom',
  'CashDeclineResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashDeclineResponseCustom',
  'CashSetOperationsStatusRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusRequestCustom',
  'CashSetOperationsStatusRequestRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecordArrayCustom',
  'CashSetOperationsStatusRequestRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecordCustom',
  'CashSetOperationsStatusResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusResponseCustom',
  'CashSetOperationsStatusResponseRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecordArrayCustom',
  'CashSetOperationsStatusResponseRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecordCustom',
  'CashGetOperationsStatusRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusRequestCustom',
  'CashGetOperationsStatusResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusResponseCustom',
  'CashGetOperationsStatusResponseRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecordArrayCustom',
  'CashGetOperationsStatusResponseRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecordCustom',
  'CashCashOutRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutRequestCustom',
  'CashCashOutResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutResponseCustom',
  'CashCashOutResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutResponseDataCustom',
  'CashCashOutCompleteRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutCompleteRequestCustom',
  'CashCashOutCompleteResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutCompleteResponseCustom',
  'CashCashOutInputDataRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutInputDataRequestCustom',
  'CashCashOutInputDataResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCashOutInputDataResponseCustom',
  'CashReturnRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnRequestCustom',
  'CashReturnResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnResponseCustom',
  'CashReturnPartialRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnPartialRequestCustom',
  'CashReturnPartialResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashReturnPartialResponseCustom',
  'CashMobileRefundRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashMobileRefundRequestCustom',
  'CashMobileRefundResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashMobileRefundResponseCustom',
  'CoreUserSearchRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserSearchRequestCustom',
  'CoreUserSearchResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserSearchResponseCustom',
  'CoreUserSearchResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserSearchResponseDataCustom',
  'SystemGetConfigRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\SystemGetConfigRequestCustom',
  'SystemGetConfigResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\SystemGetConfigResponseCustom',
  'SystemGetConfigResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\SystemGetConfigResponseDataCustom',
  'CashRequestTransferRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashRequestTransferRequestCustom',
  'CashRequestTransferResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashRequestTransferResponseCustom',
  'CashRequestTransferResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashRequestTransferResponseDataCustom',
  'CashInvoicingRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashInvoicingRequestCustom',
  'CashInvoicingResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashInvoicingResponseCustom',
  'CashInvoicingResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashInvoicingResponseDataCustom',
  'CashGetServiceFieldsRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsRequestCustom',
  'CashGetServiceFieldsResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsResponseCustom',
  'CashGetServiceFieldsResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsResponseDataCustom',
  'CashGetServiceFieldsExtendedRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetServiceFieldsExtendedRequestCustom',
  'CashCheckServiceFieldsRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCheckServiceFieldsRequestCustom',
  'CashCheckServiceFieldsResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCheckServiceFieldsResponseCustom',
  'CashCheckServiceFieldsResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCheckServiceFieldsResponseDataCustom',
  'CashGetOperationReceiptRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationReceiptRequestCustom',
  'CashGetOperationReceiptResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationReceiptResponseCustom',
  'CashGetOperationReceiptResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationReceiptResponseDataCustom',
  'CashGetOperationDataRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataRequestCustom',
  'CashGetOperationDataResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponseCustom',
  'CashGetOperationDataResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponseDataCustom',
  'CashGetOperationDataResponseDataRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecordArrayCustom',
  'CashGetOperationDataResponseDataRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecordCustom',
  'CoreUserExistsRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserExistsRequestCustom',
  'CoreUserExistsResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreUserExistsResponseCustom',
  'CashCreateInvoiceRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceRequestCustom',
  'CashCreateInvoiceResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceResponseCustom',
  'CashCreateInvoiceResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceResponseDataCustom',
  'CashCreateInvoiceExtendedRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceExtendedRequestCustom',
  'CashCreateInvoiceExtended2Request' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceExtended2RequestCustom',
  'CashCreateInvoiceByServiceRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceByServiceRequestCustom',
  'CashCreateInvoiceWithCurrencyRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashCreateInvoiceWithCurrencyRequestCustom',
  'CashPrepaidCardPerformRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardPerformRequestCustom',
  'CashPrepaidCardPerformResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardPerformResponseCustom',
  'CashPrepaidCardPerformResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardPerformResponseDataCustom',
  'CashPrepaidCardRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardRequestCustom',
  'CashPrepaidCardRequestData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardRequestDataCustom',
  'CashPrepaidCardResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardResponseCustom',
  'CashPrepaidCardResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardResponseDataCustom',
  'CashPrepaidCardCommissionRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardCommissionRequestCustom',
  'CashPrepaidCardCommissionResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponseCustom',
  'CashPrepaidCardCommissionResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponseDataCustom',
  'CreateOperation' => 'Sakhnovkrg\\Wooppay\\WSDL\\CreateOperationCustom',
  'CreateOperationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CreateOperationResponseCustom',
  'CreateOperationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CreateOperationRequestCustom',
  'PayConfirmRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\PayConfirmRequestCustom',
  'PayTransferConfirmRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\PayTransferConfirmRequestCustom',
  'CoreRequestConfirmationCodeRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreRequestConfirmationCodeRequestCustom',
  'CoreRequestConfirmationCodeResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreRequestConfirmationCodeResponseCustom',
  'CoreBeelineSMSNotificationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreBeelineSMSNotificationRequestCustom',
  'CoreBeelineSMSNotificationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreBeelineSMSNotificationResponseCustom',
  'CoreKcellSMSNotificationRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreKcellSMSNotificationRequestCustom',
  'CoreKcellSMSNotificationResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreKcellSMSNotificationResponseCustom',
  'CashGetReceiptForTransactionRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetReceiptForTransactionRequestCustom',
  'CashGetReceiptForTransactionResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponseCustom',
  'CashGetReceiptForTransactionResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponseDataCustom',
  'CoreGetMobileOperatorRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetMobileOperatorRequestCustom',
  'CoreGetMobileOperatorResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetMobileOperatorResponseCustom',
  'CoreGetMobileOperatorResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CoreGetMobileOperatorResponseDataCustom',
  'CashGetOperationDataExtendedRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedRequestCustom',
  'CashGetOperationDataExtendedResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseCustom',
  'CashGetOperationDataExtendedResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataCustom',
  'CashGetOperationDataExtendedResponseDataRecordArray' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecordArrayCustom',
  'CashGetOperationDataExtendedResponseDataRecord' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecordCustom',
  'CashGetOperationDataByExtIdRequest' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataByExtIdRequestCustom',
  'CashGetOperationDataByExtIdResponse' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponseCustom',
  'CashGetOperationDataByExtIdResponseData' => 'Sakhnovkrg\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponseDataCustom',
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
     * @param CoreLoginRequestCustom $coreLoginRequest
     * @return CoreLoginResponse
     */
    public function core_login($coreLoginRequest)
    {
      return $this->__soapCall('core_login', array($coreLoginRequest));
    }

    /**
     * Logout action
     *
     * @param CoreLogoutRequestCustom $coreLogoutRequest
     * @return CoreLogoutResponse
     */
    public function core_logout($coreLogoutRequest)
    {
      return $this->__soapCall('core_logout', array($coreLogoutRequest));
    }

    /**
     * Test action
     *
     * @param CoreSmthRequestCustom $coreSmthRequest
     * @return CoreSmthResponse
     */
    public function core_smth($coreSmthRequest)
    {
      return $this->__soapCall('core_smth', array($coreSmthRequest));
    }

    /**
     * Create new money operation
     *
     * @param CashCreateOperationRequestCustom $cashCreateOperationRequest
     * @return CashCreateOperationResponse
     */
    public function cash_createOperation($cashCreateOperationRequest)
    {
      return $this->__soapCall('cash_createOperation', array($cashCreateOperationRequest));
    }

    /**
     * Confirm money operation
     *
     * @param CashConfirmOperationRequestCustom $cashConfirmOperationRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperation($cashConfirmOperationRequest)
    {
      return $this->__soapCall('cash_confirmOperation', array($cashConfirmOperationRequest));
    }

    /**
     * Confirm money operation with confirmation code
     *
     * @param CashConfirmOperationExtRequestCustom $cashConfirmOperationExtRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperationExt($cashConfirmOperationExtRequest)
    {
      return $this->__soapCall('cash_confirmOperationExt', array($cashConfirmOperationExtRequest));
    }

    /**
     * Dischargement money
     *
     * @param CashDischargementRequestCustom $cashDischargementRequest
     * @return CashDischargementResponse
     */
    public function cash_dischargement($cashDischargementRequest)
    {
      return $this->__soapCall('cash_dischargement', array($cashDischargementRequest));
    }

    /**
     * Transfer money
     *
     * @param CashTransferRequestCustom $cashTransferRequest
     * @return CashTransferResponse
     */
    public function cash_transfer($cashTransferRequest)
    {
      return $this->__soapCall('cash_transfer', array($cashTransferRequest));
    }

    /**
     * Get transfer/payment list
     *
     * @param CashGetTransfersRequestCustom $cashGetTransfersRequest
     * @return CashGetTransfersResponse
     */
    public function cash_getTransfers($cashGetTransfersRequest)
    {
      return $this->__soapCall('cash_getTransfers', array($cashGetTransfersRequest));
    }

    /**
     * Get commission
     *
     * @param CashGetCommissionRequestCustom $cashGetCommissionRequest
     * @return CashGetCommissionResponse
     */
    public function cash_getCommission($cashGetCommissionRequest)
    {
      return $this->__soapCall('cash_getCommission', array($cashGetCommissionRequest));
    }

    /**
     * Get service id
     *
     * @param CoreGetServiceIDByNameRequestCustom $cashGetServiceIDByNameRequest
     * @return CoreGetServiceIDByNameResponse
     */
    public function core_getServiceIDByName($cashGetServiceIDByNameRequest)
    {
      return $this->__soapCall('core_getServiceIDByName', array($cashGetServiceIDByNameRequest));
    }

    /**
     * @param CashGetBalanceRequestCustom $cashGetBalanceRequest
     * @return CashGetBalanceResponse
     */
    public function cash_getBalance($cashGetBalanceRequest)
    {
      return $this->__soapCall('cash_getBalance', array($cashGetBalanceRequest));
    }

    /**
     * get categories
     *
     * @param ServiceGetCategoriesRequestCustom $serviceGetCategoriesRequest
     * @return ServiceGetCategoriesResponse
     */
    public function service_getCategories($serviceGetCategoriesRequest)
    {
      return $this->__soapCall('service_getCategories', array($serviceGetCategoriesRequest));
    }

    /**
     * Cancels/declines operation
     *
     * @param CashDeclineRequestCustom $cashDeclineRequest
     * @return CashDeclineResponse
     */
    public function cash_decline($cashDeclineRequest)
    {
      return $this->__soapCall('cash_decline', array($cashDeclineRequest));
    }

    /**
     * Set operations status
     *
     * @param CashSetOperationsStatusRequestCustom $cashSetOperationsStatusRequest
     * @return CashSetOperationsStatusResponse
     */
    public function cash_setOperationsStatus($cashSetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_setOperationsStatus', array($cashSetOperationsStatusRequest));
    }

    /**
     * Get operations status
     *
     * @param CashGetOperationsStatusRequestCustom $cashGetOperationsStatusRequest
     * @return CashGetOperationsStatusResponse
     */
    public function cash_getOperationsStatus($cashGetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_getOperationsStatus', array($cashGetOperationsStatusRequest));
    }

    /**
     * Cash out
     *
     * @param CashCashOutRequestCustom $cashCashOutRequest
     * @return CashCashOutResponse
     */
    public function cash_cashOut($cashCashOutRequest)
    {
      return $this->__soapCall('cash_cashOut', array($cashCashOutRequest));
    }

    /**
     * Cash out complete
     *
     * @param CashCashOutCompleteRequestCustom $cashCashOutCompleteRequest
     * @return CashCashOutCompleteResponse
     */
    public function cash_cashOutComplete($cashCashOutCompleteRequest)
    {
      return $this->__soapCall('cash_cashOutComplete', array($cashCashOutCompleteRequest));
    }

    /**
     * Cash out input data
     *
     * @param CashCashOutInputDataRequestCustom $cashCashOutInputDataRequest
     * @return CashCashOutInputDataResponse
     */
    public function cash_cashOutInputData($cashCashOutInputDataRequest)
    {
      return $this->__soapCall('cash_cashOutInputData', array($cashCashOutInputDataRequest));
    }

    /**
     * Return payment operation
     *
     * @param CashReturnRequestCustom $cashReturnRequest
     * @return CashReturnResponse
     */
    public function cash_paymentReturn($cashReturnRequest)
    {
      return $this->__soapCall('cash_paymentReturn', array($cashReturnRequest));
    }

    /**
     * Partial return payment operation
     *
     * @param CashReturnPartialRequestCustom $cashReturnPartialRequest
     * @return CashReturnPartialResponse
     */
    public function cash_paymentReturnPartial($cashReturnPartialRequest)
    {
      return $this->__soapCall('cash_paymentReturnPartial', array($cashReturnPartialRequest));
    }

    /**
     * Refund mobile payment operation
     *
     * @param CashMobileRefundRequestCustom $cashMobileRefundRequest
     * @return CashMobileRefundResponse
     */
    public function cash_mobileRefund($cashMobileRefundRequest)
    {
      return $this->__soapCall('cash_mobileRefund', array($cashMobileRefundRequest));
    }

    /**
     * User search
     *
     * @param CoreUserSearchRequestCustom $coreUserSearchRequest
     * @return CoreUserSearchResponse
     */
    public function core_userSearch($coreUserSearchRequest)
    {
      return $this->__soapCall('core_userSearch', array($coreUserSearchRequest));
    }

    /**
     * Get system config
     *
     * @param SystemGetConfigRequestCustom $systemGetConfigRequest
     * @return SystemGetConfigResponse
     */
    public function system_getConfig($systemGetConfigRequest)
    {
      return $this->__soapCall('system_getConfig', array($systemGetConfigRequest));
    }

    /**
     * Send transfer request
     *
     * @param CashRequestTransferRequestCustom $cashRequestTransferRequest
     * @return CashRequestTransferResponse
     */
    public function cash_requestTransfer($cashRequestTransferRequest)
    {
      return $this->__soapCall('cash_requestTransfer', array($cashRequestTransferRequest));
    }

    /**
     * Send invoice
     *
     * @param CashInvoicingRequestCustom $cashInvoicingRequest
     * @return CashInvoicingResponse
     */
    public function cash_invoicing($cashInvoicingRequest)
    {
      return $this->__soapCall('cash_invoicing', array($cashInvoicingRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsRequestCustom $cashGetServiceFieldsRequest
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFields($cashGetServiceFieldsRequest)
    {
      return $this->__soapCall('cash_getServiceFields', array($cashGetServiceFieldsRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsExtendedRequestCustom $cashGetServiceFieldsExtended
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFieldsExtended($cashGetServiceFieldsExtended)
    {
      return $this->__soapCall('cash_getServiceFieldsExtended', array($cashGetServiceFieldsExtended));
    }

    /**
     * Check service fields
     *
     * @param CashCheckServiceFieldsRequestCustom $cashCheckServiceFieldsRequest
     * @return CashCheckServiceFieldsResponse
     */
    public function cash_checkServiceFields($cashCheckServiceFieldsRequest)
    {
      return $this->__soapCall('cash_checkServiceFields', array($cashCheckServiceFieldsRequest));
    }

    /**
     * Get operation receipt
     *
     * @param CashGetOperationReceiptRequestCustom $cashGetOperationReceiptRequest
     * @return CashGetOperationReceiptResponse
     */
    public function cash_getOperationReceipt($cashGetOperationReceiptRequest)
    {
      return $this->__soapCall('cash_getOperationReceipt', array($cashGetOperationReceiptRequest));
    }

    /**
     * @param CashGetOperationDataRequestCustom $cashGetOperationDataRequest
     * @return CashGetOperationDataResponse
     */
    public function cash_getOperationData($cashGetOperationDataRequest)
    {
      return $this->__soapCall('cash_getOperationData', array($cashGetOperationDataRequest));
    }

    /**
     * User existing checking
     *
     * @param CoreUserExistsRequestCustom $coreUserExistsRequest
     * @return CoreUserExistsResponse
     */
    public function core_userExists($coreUserExistsRequest)
    {
      return $this->__soapCall('core_userExists', array($coreUserExistsRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceRequestCustom $cashCreateInvoiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice($cashCreateInvoiceRequest)
    {
      return $this->__soapCall('cash_createInvoice', array($cashCreateInvoiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtendedRequestCustom $cashCreateInvoiceExtendedRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceExtended($cashCreateInvoiceExtendedRequest)
    {
      return $this->__soapCall('cash_createInvoiceExtended', array($cashCreateInvoiceExtendedRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtended2RequestCustom $cashCreateInvoiceExtended2Request
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice2Extended($cashCreateInvoiceExtended2Request)
    {
      return $this->__soapCall('cash_createInvoice2Extended', array($cashCreateInvoiceExtended2Request));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceByServiceRequestCustom $cashCreateInvoiceByServiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceByService($cashCreateInvoiceByServiceRequest)
    {
      return $this->__soapCall('cash_createInvoiceByService', array($cashCreateInvoiceByServiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceWithCurrencyRequestCustom $cashCreateInvoiceWithCurrencyRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceWithCurrency($cashCreateInvoiceWithCurrencyRequest)
    {
      return $this->__soapCall('cash_createInvoiceWithCurrency', array($cashCreateInvoiceWithCurrencyRequest));
    }

    /**
     * prepaid card perform
     *
     * @param CashPrepaidCardPerformRequestCustom $cashPrepaidCardPerformRequest
     * @return CashPrepaidCardPerformResponse
     */
    public function cash_prepaidCardPerform($cashPrepaidCardPerformRequest)
    {
      return $this->__soapCall('cash_prepaidCardPerform', array($cashPrepaidCardPerformRequest));
    }

    /**
     * prepaid card
     *
     * @param CashPrepaidCardRequestCustom $cashPrepaidCardRequest
     * @return CashPrepaidCardResponse
     */
    public function cash_prepaidCard($cashPrepaidCardRequest)
    {
      return $this->__soapCall('cash_prepaidCard', array($cashPrepaidCardRequest));
    }

    /**
     * prepaid card get commission
     *
     * @param CashPrepaidCardCommissionRequestCustom $cashPrepaidCardCommissionRequest
     * @return CashPrepaidCardCommissionResponse
     */
    public function cash_prepaidCardCommission($cashPrepaidCardCommissionRequest)
    {
      return $this->__soapCall('cash_prepaidCardCommission', array($cashPrepaidCardCommissionRequest));
    }

    /**
     * @param CreateOperationCustom $createOperation
     * @return CreateOperationResponse
     */
    public function createOperation($createOperation)
    {
      return $this->__soapCall('createOperation', array($createOperation));
    }

    /**
     * @param CreateOperationRequestCustom $createOperation
     * @return CreateOperationResponse
     */
    public function createOperationFake($createOperation)
    {
      return $this->__soapCall('createOperationFake', array($createOperation));
    }

    /**
     * @param PayConfirmRequestCustom $PayConfirmRequest
     * @return CreateOperationResponse
     */
    public function payConfirm($PayConfirmRequest)
    {
      return $this->__soapCall('payConfirm', array($PayConfirmRequest));
    }

    /**
     * @param PayTransferConfirmRequestCustom $PayTransferConfirmRequest
     * @return CreateOperationResponse
     */
    public function payTransferConfirm($PayTransferConfirmRequest)
    {
      return $this->__soapCall('payTransferConfirm', array($PayTransferConfirmRequest));
    }

    /**
     * @param CoreRequestConfirmationCodeRequestCustom $coreRequestConfirmationCodeRequest
     * @return CoreRequestConfirmationCodeResponse
     */
    public function core_requestConfirmationCode($coreRequestConfirmationCodeRequest)
    {
      return $this->__soapCall('core_requestConfirmationCode', array($coreRequestConfirmationCodeRequest));
    }

    /**
     * @param CoreBeelineSMSNotificationRequestCustom $coreBeelineSMSNotificationRequest
     * @return CoreBeelineSMSNotificationResponse
     */
    public function core_beelineSMSNotification($coreBeelineSMSNotificationRequest)
    {
      return $this->__soapCall('core_beelineSMSNotification', array($coreBeelineSMSNotificationRequest));
    }

    /**
     * @param CoreKcellSMSNotificationRequestCustom $coreKcellSMSNotificationRequest
     * @return CoreKcellSMSNotificationResponse
     */
    public function core_kcellSMSNotification($coreKcellSMSNotificationRequest)
    {
      return $this->__soapCall('core_kcellSMSNotification', array($coreKcellSMSNotificationRequest));
    }

    /**
     * Get operation receipt by Oberthur MFS id
     *
     * @param CashGetReceiptForTransactionRequestCustom $cashGetReceiptForTransactionRequest
     * @return CashGetReceiptForTransactionResponse
     */
    public function cash_getReceiptForTransaction($cashGetReceiptForTransactionRequest)
    {
      return $this->__soapCall('cash_getReceiptForTransaction', array($cashGetReceiptForTransactionRequest));
    }

    /**
     * @param CoreGetMobileOperatorRequestCustom $coreGetMobileOperatorRequest
     * @return CoreGetMobileOperatorResponse
     */
    public function core_getMobileOperator($coreGetMobileOperatorRequest)
    {
      return $this->__soapCall('core_getMobileOperator', array($coreGetMobileOperatorRequest));
    }

    /**
     * @param CashGetOperationDataExtendedRequestCustom $cashGetOperationDataExtendedRequest
     * @return CashGetOperationDataExtendedResponse
     */
    public function cash_getOperationDataExtended($cashGetOperationDataExtendedRequest)
    {
      return $this->__soapCall('cash_getOperationDataExtended', array($cashGetOperationDataExtendedRequest));
    }

    /**
     * @param CashGetOperationDataByExtIdRequestCustom $cashGetOperationDataByExtIdRequest
     * @return CashGetOperationDataByExtIdResponse
     */
    public function cash_getOperationDataByExtId($cashGetOperationDataByExtIdRequest)
    {
      return $this->__soapCall('cash_getOperationDataByExtId', array($cashGetOperationDataByExtIdRequest));
    }

}
