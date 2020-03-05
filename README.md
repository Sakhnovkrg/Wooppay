## Установка
```bash
composer require sakhnovkrg/wooppay 1.0
```
## Использование
```php
$wooppay = new \Sakhnovkrg\Wooppay\WooppayClient(
    'https://www.wooppay.com/api/xml',
    'username',
    'password'
);

$invoice = $wooppay->createInvoiceByService(
    ...
);

$operationUrl = $invoice->operationUrl;
$operationId = $invoice->operationId;

$status = $wooppay->getOperationStatus($operationId);

if($status == \Sakhnovkrg\Wooppay\WooppayClient::STATUS_DONE) {
    \Sakhnovkrg\Wooppay\WooppayClient::sendCompleteResponse();
}
```