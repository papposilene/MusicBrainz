<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\AttributeType;

/**
 * Provides a getter for the attribute type.
 */
trait AttributeTypeTrait
{
    /**
     * The attribute type
     *
     * @var AttributeType
     */
    private $attributeType;

    /**
     * Returns the attribute type.
     *
     * @return AttributeType
     */
    public function getAttributeType(): AttributeType
    {
        return $this->attributeType;
    }
}
