<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for an area name.
 */
trait AreaNameAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the area name.
     *
     * @return null|string
     */
    public function getAreaName(): ?string
    {
        return $this->getFilterValue('area');
    }

    /**
     * Sets the area name.
     *
     * @param null|string $areaName An area name
     *
     * @return self
     */
    public function setAreaName(?string $areaName): self
    {
        return $this->setFilterValue('area', $areaName);
    }
}
