<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\SortName;

/**
 * Provides accessors for the sort index.
 */
trait SortNameTrait
{
    /**
     * The sort index.
     *
     * @var null|SortName
     */
    private $sortName;

    /**
     * Returns the sort index.
     *
     * @return null|SortName
     */
    public function getSortName(): ?SortName
    {
        return $this->sortName;
    }

    /**
     * Sets the sort index.
     *
     * @param null|SortName $sortName The sort index
     *
     * @return self
     */
    public function setSortName(?SortName $sortName): self
    {
        $this->sortName = $sortName;

        return $this;
    }
}
