<?php

namespace Sakhnovkrg\Wooppay;

use Sakhnovkrg\Wooppay\Exception\WooppayException;
use Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceByServiceRequest;
use Sakhnovkrg\Wooppay\WSDL\CashGetOperationDataRequest;
use Sakhnovkrg\Wooppay\WSDL\CoreLoginRequest;
use Sakhnovkrg\Wooppay\WSDL\XmlControllerService;
use Sakhnovkrg\Wooppay\WSDL\CoreLoginResponse;

/**
 * Class WooppayClient
 * @package Sakhnovkrg\Wooppay
 */
class WooppayClient
{
    const STATUS_NEW = 1;
    const STATUS_CONSIDER = 2;
    const STATUS_REJECTED = 3;
    const STATUS_DONE = 4;
    const STATUS_CANCELED = 5;
    const STATUS_CANCELING = 6;

    /**
     * @var string
     */
    protected $wsdlUrl;
    /**
     * @var XmlControllerService
     */
    protected $client;
    /**
     * @var CoreLoginResponse
     */
    protected $login;

    /**
     * @param string $serviceName  Наименование сервиса
     * @param string $orderId      ID заказа
     * @param float|int $price     Сумма выставляемого счета
     * @param integer $timeInHours Количество часов, через которое операция станет недействительной
     * @param string $email        Адрес электронной почты клиента
     * @param string $phone        Телефон клиента
     * @param string $backUrl      Адрес, на который будет переадресован пользователь после оплаты
     * @param string $completeUrl  Адрес, на который Wooppay сделает запрос после успешной оплаты
     * @param string $orderInfo    Комментарий в форме оплаты
     * @param string $comment      Короткий необязательный комментарий, который попадет в историю операций клиента
     * @return WooppayInvoiceResult
     * @throws WooppayException
     */
    public function createInvoiceByService(
        $serviceName,
        $orderId,
        $price,
        $timeInHours,
        $email,
        $phone,
        $backUrl,
        $completeUrl,
        $orderInfo,
        $comment = '')
    {
        $deathDate =  date('Y-m-d H:i:s', time() + $timeInHours * 3600);

        $request = new CashCreateInvoiceByServiceRequest(
            $serviceName,
            0,
            $email,
            $phone,
            (string)$orderId,
            $backUrl,
            $completeUrl,
            $orderInfo,
            $price,
            $deathDate,
            0,
            $comment,
            0
        );

        return new WooppayInvoiceResult($this->getClient(), $request);
    }

    /**
     * @param int $operationId
     * @return int
     * @throws WooppayException
     */
    public function getOperationStatus($operationId)
    {
        $request = new CashGetOperationDataRequest([$operationId]);
        $result = $this->getClient()->cash_getOperationData($request);

        $response = $result->getResponse();
        if ($response === null) {
            throw new WooppayException($result->getError_code());
        }

        $record = current($result->getResponse()->getRecords());

        return $record->getStatus();
    }

    public function sendCompleteResponse()
    {
        header('Content-Type: application/json');
        die('{"data":1}');
    }

    /**
     * @return XmlControllerService
     */
    public function getClient()
    {
        if (!$this->client) {
            $this->client = new XmlControllerService([], $this->wsdlUrl);
        }
        return $this->client;
    }

    /**
     * @param string $username
     * @param string $password
     * @throws WooppayException
     */
    protected function login($username, $password)
    {
        $client = $this->getClient();
        $this->login = $client->core_login(new CoreLoginRequest($username, $password, ''));
        if ($this->login->getResponse() === null) {
            throw new WooppayException($this->login->getError_code());
        }
    }

    /**
     * WooppayClient constructor.
     * @param string $wsdlUrl
     * @param string $username
     * @param string $password
     * @throws WooppayException
     */
    public function __construct($wsdlUrl, $username, $password)
    {
        $this->wsdlUrl = $wsdlUrl;
        $this->login($username, $password);
    }
}
