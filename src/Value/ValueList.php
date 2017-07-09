<?php

namespace MusicBrainz\Value;

use MusicBrainz\Collection\ArrayAccessTrait;
use MusicBrainz\Collection\CollectionTrait;
use MusicBrainz\Collection\IteratorTrait;

/**
 * A list of values
 *
 * @link http://php.net/manual/en/class.iterator.php
 */
abstract class ValueList implements
    \ArrayAccess,
    \Iterator
{
    use ArrayAccessTrait;
    use CollectionTrait;
    use IteratorTrait;

    /**
     * Constructs a list of values.
     *
     * @param array $array Array of values
     */
    public function __construct(array $array = [])
    {
        $this->elements = $array;
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    abstract public static function getType(): string;
}
