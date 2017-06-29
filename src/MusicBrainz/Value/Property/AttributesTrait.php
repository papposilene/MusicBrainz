<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the list of attributes by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setAttributesFromArray(array $input): void
    {
        $this->attributes = is_null($attributes = ArrayAccess::getArray($input, 'attributes'))
            ? new AttributeList
            : new AttributeList($attributes);
    }
}
