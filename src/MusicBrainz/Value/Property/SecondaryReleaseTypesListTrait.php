<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseTypeList;

/**
 * Provides a getter for a release type list.
 */
trait SecondaryTypesListTrait
{
    /**
     * A list of release types
     *
     * @var ReleaseTypeList
     */
    private $releaseTypeList;

    /**
     * Returns the list of release types.
     *
     * @return ReleaseTypeList
     */
    public function getReleaseType(): ReleaseTypeList
    {
        return $this->releaseTypeList;
    }
}
