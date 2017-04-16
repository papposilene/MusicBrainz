<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\AttributeList;

/**
 * Provides a getter for a list of attributes.
 */
trait AttributesTrait
{
    /**
     * A list of attributes
     *
     * @var AttributeList
     */
    private $attributes;

    /**
     * Returns a list of attributes.
     *
     * @return AttributeList
     */
    public function getAttributes(): AttributeList
    {
        return $this->attributes;
    }
}
