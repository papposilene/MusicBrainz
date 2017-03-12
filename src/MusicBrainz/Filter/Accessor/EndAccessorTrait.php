<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Date;

/**
 * Provides accessors for the artist death date/band dissolution date.
 */
trait EndAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns artist death date/band dissolution date.
     *
     * @return null|Date
     */
    public function getEnd(): ?Date
    {
        return $this->getFilterValue('end');
    }

    /**
     * Sets artist death date/band dissolution date.
     *
     * @param null|Date $end Artist death date/band dissolution date
     *
     * @return self
     */
    public function setEnd(?Date $end): self
    {
        return $this->setFilterValue('end', $end);
    }
}
