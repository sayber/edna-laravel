<?php


namespace Edna;

/**
 * Class EdnaConstants
 * @package Edna
 *
 * @TODO need english version
 */
final class EdnaConstants
{
    /** @var string[] */
    public const ERRORS = [
        'ok'                                      => 'сообщение успешно принято на отправку',
        'error-system'                            => 'системная ошибка',
        'error-content-do-not-match-hsm-template' => 'сообщение не соответствует зарегистрированному шаблону HSM.',
        'error-insufficient-balance'              => 'недостаточно средств на балансе. Необходимо пополнить счет в личном кабинете либо обратиться к персональному менеджеру',
        'error-id-not-unique'                     => 'идентификатор сообщения не уникален в рамках всего взаимодействия',
        'error-subject-format'                    => 'неправильный формат подписи',
        'error-subject-unknown'                   => 'указанная подпись не разрешена клиенту.Необходимо предварительно зарегестрировать все подписи.',
        'error-address-format'                    => 'неправильный формат номера абонента',
        'error-address-not-specified'             => 'номер абонента не указан',
        'error-priority-format'                   => 'неправильный формат значения приоритета',
        'error-start-time-format'                 => 'неправильный формат отложенного времени отправки сообщения',
        'error-validity-period-seconds-format'    => 'неправильный формат отложенного времени отправки.',
        'error-content-type-format'               => 'неправильный формат типа содержимого сообщения',
        'error-im-type-not-specified'             => 'тип мессенджера не указан',
        'error-attachment-url-not-specified'      => 'В параметре attachmentUrl передается пустое поле.',
        'error-latitude-not-specified'            => 'latitude (Широта) не указано.',
        'error-longtitude-not-specified'          => 'longitude (Долгота) не указано.',
        'error-content-format'                    => 'неправильный формат содержимого сообщения',
        'error-content-not-specified'             => 'содержимое сообщения не указано',
        'error-not-template-match'                => 'неправильный формат шаблона',
        'error-subject-id-format'                 => 'неправильный формат Id шаблона',
        'not-whatsapp-user'                       => 'адресат не является пользователем Whatsapp',
        'not-viber-user'                          => 'адресат не является пользователем Viber',
        'user-blocked'                            => 'номер адресата заблокирован'
    ];

    /** @var string[]  */
    public const STATUSES = [
        'enqueued'          => 'сообщение находится в очереди на отправку',
        'sent'              => 'сообщение отправлено адресату',
        'delivered'         => 'сообщение доставлено адресату',
        'undelivered'       => 'сообщение отправлено, но не доставлено адресату',
        'read'              => 'сообщение прочитано адресатом',
        'failed'            => 'сообщение не было отправлено в результат сбоя',
        'no-match-template' => 'сообщение не соответствует допустимому шаблону',
        'delayed'           => 'отправка сообщения отложена',
        'cancelled'         => 'отправка сообщения отменена'
    ];

}
