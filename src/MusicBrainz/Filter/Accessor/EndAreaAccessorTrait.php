<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the name of the ending area.
 */
trait EndAreaAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the name of the ending area.
     *
     * @return null|string
     */
    public function getEndAreaName(): ?string
    {
        return $this->getFilterValue('endarea');
    }

    /**
     * Sets the name of the ending area.
     *
     * @param null|string $endAreaName The name of the ending area
     *
     * @return self
     */
    public function setEndAreaName(?string $endAreaName): self
    {
        return $this->setFilterValue('endarea', $endAreaName);
    }
}
