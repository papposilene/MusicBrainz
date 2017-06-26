<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value;

/**
 * Provides a getter for a value.
 */
trait ValueTrait
{
    /**
     * A value
     *
     * @var Value
     */
    private $value;

    /**
     * Returns the value.
     *
     * @return Value
     */
    public function getValue(): Value
    {
        return $this->value;
    }
}
