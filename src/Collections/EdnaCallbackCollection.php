<?php


namespace Edna\Collections;


use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class EdnaCallbackCollection
 * @package Edna\Collections
 */
class EdnaCallbackCollection extends DataTransferObject
{
    /** @var int  message id */
    public int $id;

    /** @var string subject message from edna */
    public string $imSubject;

    /** @var string  phone or other messenger id */
    public string $address;

    /** @var int timestamp received message*/
    public int $receivedAt;

    /** @var string  channel name (whatsapp, vk, viber etc.) */
    public string $imType;

    /** @var string message type (text, image, button, audio, video) */
    public string $contentType;

    /** @var string  message */
    public string $text;

    /** @var string|null  location name */
    public ?string $caption;

    /** @var string|null  file url */
    public ?string $attachmentUrl;

    /** @var string|null  file name */
    public ?string $attachmentName;

    /** @var string|null  coords */
    public ?string $longitude;

    /** @var string|null coords */
    public ?string $latitude;

    /** @var string|null address */
    public ?string $locationAddress;

    /** @var string|null nickname */
    public ?string $userName;

    /** @var string|null  */
    public ?string $firstName;

    /** @var string|null  */
    public ?string $lastName;

    /** @var string|null  */
    public ?string $avatarUrl;

    /** @var string|null  */
    public ?string $payload;

    /** @var string|null  */
    public ?string $apiKeyId;

}
