<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Date;

/**
 * Provides accessors for the artist birth date/band founding date.
 */
trait BeginAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns artist birth date/band founding date.
     *
     * @return null|Date
     */
    public function getBegin(): ?Date
    {
        return $this->getFilterValue('begin');
    }

    /**
     * Sets artist birth date/band founding date.
     *
     * @param null|Date $begin Artist birth date/band founding date
     *
     * @return self
     */
    public function setBegin(?Date $begin): self
    {
        return $this->setFilterValue('begin', $begin);
    }
}
