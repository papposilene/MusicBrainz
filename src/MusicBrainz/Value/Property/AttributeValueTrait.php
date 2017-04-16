<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\AttributeValue;

/**
 * Provides a getter for the attribute value.
 */
trait AttributeValueTrait
{
    /**
     * The attribute value
     *
     * @var AttributeValue
     */
    private $attributeValue;

    /**
     * Returns the attribute value.
     *
     * @return AttributeValue
     */
    public function getAttributeValue(): AttributeValue
    {
        return $this->attributeValue;
    }
}
