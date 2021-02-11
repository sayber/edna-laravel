<?php


namespace Edna\Collections;


use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class EdnaStatusCallbackCollection
 * @package Edna\Collections
 */
class EdnaStatusCallbackCollection extends DataTransferObject
{
    /** 'message id from edna */
    public string $imOutMessageId;

    /** 'status message (https://edna.docs.apiary.io/#reference/0) */
    public string $dlvStatus;

    /** 'time status update 2020-01-10T19:03:52.355+0300 */
    public string $dlvStatusAt;

    /** 'error status message */
    public ?string $dlvError;

    /** 'price reserve sms */
    public ?string $rate;

    /** 'status reserve sms */
    public ?string $reserveSms;
}
