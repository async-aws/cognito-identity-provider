<?php

namespace AsyncAws\CognitoIdentityProvider\ValueObject;

/**
 * The new device metadata type.
 */
final class NewDeviceMetadataType
{
    /**
     * The device key.
     *
     * @var string|null
     */
    private $deviceKey;

    /**
     * The device group key.
     *
     * @var string|null
     */
    private $deviceGroupKey;

    /**
     * @param array{
     *   DeviceKey?: null|string,
     *   DeviceGroupKey?: null|string,
     * } $input
     */
    public function __construct(array $input)
    {
        $this->deviceKey = $input['DeviceKey'] ?? null;
        $this->deviceGroupKey = $input['DeviceGroupKey'] ?? null;
    }

    /**
     * @param array{
     *   DeviceKey?: null|string,
     *   DeviceGroupKey?: null|string,
     * }|NewDeviceMetadataType $input
     */
    public static function create($input): self
    {
        return $input instanceof self ? $input : new self($input);
    }

    public function getDeviceGroupKey(): ?string
    {
        return $this->deviceGroupKey;
    }

    public function getDeviceKey(): ?string
    {
        return $this->deviceKey;
    }
}
