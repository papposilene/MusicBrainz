<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * An attribute value
 */
class AttributeValue implements Value
{
    use Property\MBIDTrait;
    use Property\NameTrait;

    /**
     * Constructs an attribute value.
     *
     * @param array $area Information about the attribute value
     */
    public function __construct(array $area = [])
    {
        $this->MBID = new MBID(isset($area['value-id']) ? (string) $area['value-id'] : '');
        $this->name = new Name(isset($area['value']) ? (string) $area['value'] : '');
    }

    /**
     * Returns the attribute value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getName();
    }
}
