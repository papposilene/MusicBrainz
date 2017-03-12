<?php

namespace MusicBrainz\Filter;

use MusicBrainz\Collection\ArrayAccessTrait;
use MusicBrainz\Collection\CollectionTrait;
use MusicBrainz\Collection\IteratorTrait;

/**
 * A list of filter values
 */
class FilterValueList implements \Iterator, \ArrayAccess, \Countable
{
    use CollectionTrait;
    use IteratorTrait;
    use ArrayAccessTrait;

    /**
     * Returns the number of list elements.
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->elements);
    }
}
