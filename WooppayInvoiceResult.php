<?php

namespace Sakhnovkrg\Wooppay;

use Sakhnovkrg\Wooppay\Exception\WooppayException;
use Sakhnovkrg\Wooppay\WSDL\XmlControllerService;
use Sakhnovkrg\Wooppay\WSDL\CashCreateInvoiceByServiceRequest;

/**
 * Class WooppayInvoiceResult
 * @package Sakhnovkrg\Wooppay
 */
class WooppayInvoiceResult
{
    /**
     * @var string
     */
    public $operationUrl;
    /**
     * @var int
     */
    public $operationId;

    /**
     * @var XmlControllerService
     */
    protected $client;
    /**
     * @var CashCreateInvoiceByServiceRequest
     */
    protected $request;

    /**
     * @throws WooppayException
     */
    protected function create()
    {
        $invoice = $this->client->cash_createInvoiceByService($this->request);

        $response = $invoice->getResponse();
        if ($response == null) {
            throw new WooppayException($invoice->getError_code());
        }

        $this->operationId = $response->getOperationId();
        $this->operationUrl = $response->getOperationUrl();
    }

    /**
     * WooppayInvoiceResult constructor.
     * @param XmlControllerService $client
     * @param CashCreateInvoiceByServiceRequest $request
     * @throws WooppayException
     */
    public function __construct($client, $request)
    {
        $this->client = $client;
        $this->request = $request;
        $this->create();
    }
}
