<?php

namespace Sakhnovkrg\Wooppay\Exception;

use Throwable;

/**
 * Class WooppayException
 * @package Sakhnovkrg\Wooppay\Exception
 */
class WooppayException extends \Exception
{
    protected function getMessageByErrorCode($code)
    {
        $errors = [
            1 => 'Неверный формат пакета',
            2 => 'Неизвестная команда',
            3 => 'Ошибка на стороне сервера',
            4 => 'Доступ запрещен',
            5 => 'Необходимо войти в систему',
            11 => 'Не удалось подтвердить операцию',
            12 => 'Перевод не удался',
            13 => 'Не удалось отменить операцию',
            14 => 'Не удалось произвести возврат платежа',
            101 => 'Неверные данные при входе в систему',
            102 => 'Недостаточно средств на счету',
            103 => 'Пользователь не найден',
            109 => 'Не удалось отправить запрос на перевод',
            111 => 'Не удалось выставить счёт',
            112 => 'БД недоступна',
            113 => 'Ошибка на стороне БД',
            114 => 'Режим обслуживания',
            156 => 'Неверная сумма платежа (ошибка со стороны Beeline)',
            157 => 'не использован стартовый баланс 400 тг',
            158 => 'дублирующийся запрос (повторная попытка списания с номера в течение 5 минут)',
            159 => 'Списание с баланса невозможно (доверительный платеж)',
            165 => 'Не удалось провести платёж',
            213 => 'Нет такого сервиса в базе',
            214 => 'Превышены лимиты при создании новой операции',
            215 => 'Нулевая сумма операции',
            221 => 'Операция уже создана',
            222 => 'Слишком частые запросы кода подтверждения операции',
            223 => 'Неверный код подтверждения операции',
            224 => 'Превышено количество попыток',
            225 => 'номер не зарегистрирован в MFS',
            226 => 'недостаточно средств на балансе',
            227 => 'Не удалось списать с баланса Kcell',
            228 => 'Не удалось произвести возврат на баланс Kcell',
            229 => 'Тариф абонента не позволяет использовать мобильную коммерцию',
            306 => 'Операция запрещена',
            307 => 'Счет заблокирован',
            308 => 'IP пользователя заблокирован',
            309 => 'Ошибка при создании/проведении вывода на карту',
            310 => 'Неверный статус вывода на карту',
            311 => 'Вывод на карту в обработке',
            402 => 'Неизвестный тип пакета',
            403 => 'Разбор пакета не удался',
            408 => 'Неизвестная денежная операция',
            409 => 'Неизвестный тип отчета',
            410 => 'Некорректная структура пакета',
            411 => 'Пустое обязательное поле',
            419 => 'Неизвестный тип платежа/перевода',
            420 => 'Передано отрицательное число',
            602 => 'Пользователь не зарегистрирован',
            603 => 'Оператор сотовой связи не обслуживается',
            606 => 'Пользователь не аутентифицирован',
            607 => 'Истёк срок действия ключа аутентификации',
            613 => 'Тип субъекта не соответствует выполняемой операции',
            619 => 'У пользователя не найден счёт',
            621 => 'Отсутствует комиссия',
            801 => 'Неклассифицированная ошибка',
            802 => 'Не найден счёт/аккаунт/etc',
            803 => 'В биллинг передан некорректный параметр',
            804 => 'Не удалось найти поля биллинга, соответствующие переданным параметрам',
            805 => 'Не прошла проверка аккаунта на стороне мерчанта',
            806 => 'Указан неактивный аккаунт',
            807 => 'Платёж запрещён',
            808 => 'Платёж не окончен',
            809 => 'Технические проблемы на стороне мерчанта',
            810 => 'Мерчант временно недоступен',
            811 => 'Слишком маленькая сумма платежа',
            812 => 'Слишком большая сумма платежа',
            813 => 'Неверный формат номера',
            815 => 'Операция по выводу средств уже была проведена',
            816 => 'Неверный защитный код',
            817 => 'Данная операция отменена пользователем',
        ];

        if(isset($errors[$code])) {
            return $errors[$code];
        }

        return $code;
    }

    /**
     * WooppayException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = $this->getMessageByErrorCode((int)$message);

        parent::__construct($message, $code, $previous);
    }
}