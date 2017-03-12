<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the area name.
 */
trait AreaNameAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the name of the artist's area.
     *
     * @return null|string
     */
    public function getAreaName(): ?string
    {
        return $this->getFilterValue('area');
    }

    /**
     * Sets the name of the artist's area.
     *
     * @param null|string $areaName The artist's area
     *
     * @return self
     */
    public function setAreaName(?string $areaName): self
    {
        return $this->setFilterValue('area', $areaName);
    }
}
