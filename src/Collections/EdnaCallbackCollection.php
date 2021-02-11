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

    /**  subject message from edna */
    public string $imSubject;

    /**   phone or other messenger id */
    public string $address;

    /** @var int timestamp received message*/
    public int $receivedAt;

    /**   channel name (whatsapp, vk, viber etc.) */
    public string $imType;

    /**  message type (text, image, button, audio, video) */
    public string $contentType;

    /**   message */
    public string $text;

    /**  location name */
    public ?string $caption;

    /**  file url */
    public ?string $attachmentUrl;

    /**  file name */
    public ?string $attachmentName;

    /**  coords */
    public ?string $longitude;

    /** coords */
    public ?string $latitude;

    /** address */
    public ?string $locationAddress;

    /** nickname */
    public ?string $userName;

    /** ... */
    public ?string $firstName;

    /** ...  */
    public ?string $lastName;

    /** ...  */
    public ?string $avatarUrl;

    /** ...  */
    public ?string $payload;

    /** ...  */
    public ?string $apiKeyId;

}
