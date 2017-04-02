<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\SortName;

/**
 * Provides a getter for a sort name.
 */
trait SortNameTrait
{
    /**
     * The sort index for the name
     *
     * For artists: The sort name is a variant of the artist name which would be used when sorting artists by name, such
     * as in record shops or libraries. Among other things, sort names help to ensure that all the artists that start
     * with "The" don't end up up under "T". The guidelines for sort names are the best place to check for more specific
     * usage info.
     *
     * @var SortName
     */
    private $sortName;

    /**
     * Returns the sort index for the name.
     *
     * @return SortName
     */
    public function getSortName(): SortName
    {
        return $this->sortName;
    }
}
