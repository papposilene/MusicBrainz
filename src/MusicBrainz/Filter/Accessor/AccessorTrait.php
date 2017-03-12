<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Filter\Filter;

/**
 * Enforce the exhibiting class to provide filter value accessors.
 */
trait AccessorTrait
{
    /**
     * Returns a filter value.
     *
     * @param string $key Filter key
     *
     * @return null|mixed
     */
    abstract public function getFilterValue(string $key);

    /**
     * Sets a filter value.
     *
     * @param string     $key   Filter key
     * @param null|mixed $value Value
     *
     * @return Filter
     */
    abstract protected function setFilterValue(string $key, $value): Filter;
}
