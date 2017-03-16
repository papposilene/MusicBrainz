<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the sort index.
 */
trait SortNameAccessorTrait
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
     * @return self
     */
    public function setSortName(Name $sortName): self
    {
        $this->sortName = $sortName;

        return $this;
    }
}
