<?php

namespace MusicBrainz\Value;

/**
 * An attribute type
 */
class AttributeType
{
    use Property\MBIDTrait;
    use Property\NameTrait;

    /**
     * Constructs an attribute type.
     *
     * @param array $area Information about the attribute type
     */
    public function __construct(array $area = [])
    {
        $this->MBID = new MBID(isset($area['type-id']) ? (string) $area['type-id'] : '');
        $this->name = new Name(isset($area['type']) ? (string) $area['type'] : '');
    }

    /**
     * Returns the attribute name as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->name;
    }
}
