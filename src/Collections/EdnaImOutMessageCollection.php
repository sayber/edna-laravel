<?php

namespace Edna\Collections;

use Spatie\DataTransferObject\DataTransferObject as DataTransferObjectAlias;

/**
 * Class EdnaImOutMessage
 * @package Edna\Collections
 */
class EdnaImOutMessageCollection extends DataTransferObjectAlias
{
    /** @var string custom uuid */
    public string $id;

    /** @var string subject from edna system */
    public string $subject;

    /** @var string phone or messenger id */
    public string $address;

    /** @var string optional (realtime, high, normal etc...) */
    public string $priority = 'high';

    /** @var string date 2020-01-12T12:30:00.000Z */
    public string $startTime;

    /** @var string|null type messenger, default null = whatsapp (whatsapp, viber, vk) */
    public ?string $imType;

    /** @var integer  time during which the message should be delivered */
    public int $validityPeriodSeconds = 86400;

    /** @var string types (document, image, text, video, audio, location)  */
    public string $contentType = 'text';

    /** @var string|null file name or null for text */
    public ?string $attachmentName;

    /** @var string|null link for file or null fur text */
    public ?string $attachmentUrl;
}
