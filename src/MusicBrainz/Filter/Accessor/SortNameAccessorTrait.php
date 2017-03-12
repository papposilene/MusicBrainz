<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the sort index.
 */
trait SortNameAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the sort index.
     *
     * @return null|string
     */
    public function getSortName(): ?string
    {
        return $this->getFilterValue('sortname');
    }

    /**
     * Sets the sort index.
     *
     * @param null|string $sortName The sort index
     *
     * @return self
     */
    public function setSortName(?string $sortName): self
    {
        return $this->setFilterValue('sortname', $sortName);
    }
}
