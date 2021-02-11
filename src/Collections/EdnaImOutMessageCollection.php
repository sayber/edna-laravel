<?php

namespace Edna\Collections;

use Spatie\DataTransferObject\DataTransferObject as DataTransferObjectAlias;

/**
 * Class EdnaImOutMessage
 * @package Edna\Collections
 */
class EdnaImOutMessageCollection extends DataTransferObjectAlias
{
    /** custom uuid */
    public string $id;

    /** subject from edna system */
    public string $subject;

    /** phone or messenger id */
    public string $address;

    /** optional (realtime, high, normal etc...) */
    public string $priority = 'high';

    /** date 2020-01-12T12:30:00.000Z */
    public string $startTime;

    /** message */
    public string $text = '';

    /** type messenger, default null = whatsapp (whatsapp, viber, vk) */
    public ?string $imType;

    /** time during which the message should be delivered */
    public int $validityPeriodSeconds = 86400;

    /** pes (document, image, text, video, audio, location)  */
    public string $contentType = 'text';

    /** file name or null for text */
    public ?string $attachmentName;

    /** link for file or null fur text */
    public ?string $attachmentUrl;
}
