<?php


namespace Edna\Collections;


use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class EdnaStatusCallbackCollection
 * @package Edna\Collections
 */
class EdnaStatusCallbackCollection extends DataTransferObject
{
    /** @var string message id from edna */
    public string $imOutMessageId;

    /** @var string status message (https://edna.docs.apiary.io/#reference/0) */
    public string $dlvStatus;

    /** @var string time status update 2020-01-10T19:03:52.355+0300 */
    public string $dlvStatusAt;

    /** @var string|null error status message */
    public ?string $dlvError;

    /** @var string|null price reserve sms */
    public ?string $rate;

    /** @var string|null status reserve sms */
    public ?string $reserveSms;
}
