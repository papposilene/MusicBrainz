<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the name of the beginning area.
 */
trait BeginAreaAccessorTrait
{
    use AccessorTrait;

    /**
     * Sets the name of the beginning area.
     *
     * @return null|string
     */
    public function getBeginAreaName(): ?string
    {
        return $this->getFilterValue('beginarea');
    }

    /**
     * Sets the name of the beginning area.
     *
     * @param null|string $beginAreaName The name of the beginning area
     *
     * @return self
     */
    public function setBeginAreaName(?string $beginAreaName): self
    {
        return $this->setFilterValue('beginarea', $beginAreaName);
    }
}
