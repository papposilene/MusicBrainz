<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the sort index.
 */
trait SortNameTrait
{
    /**
     * The sort index.
     *
     * @var Name
     */
    private $sortName;

    /**
     * Returns the sort index.
     *
     * @return Name
     */
    public function getSortName(): Name
    {
        return $this->sortName;
    }

    /**
     * Sets the sort index.
     *
     * @param Name $sortName The sort index
     *
     * @return SortNameTrait
     */
    public function setSortName(Name $sortName): self
    {
        $this->sortName = $sortName;

        return $this;
    }
}
