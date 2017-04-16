<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseTypeList;

/**
 * Provides a getter for a list of secondary release types.
 */
trait SecondaryReleaseTypesListTrait
{
    /**
     * A list of secondary release types
     *
     * @var ReleaseTypeList
     */
    private $secondaryReleaseTypes;

    /**
     * Returns the list of secondary release types.
     *
     * @return ReleaseTypeList
     */
    public function getSecondaryReleaseTypes(): ReleaseTypeList
    {
        return $this->releaseTypeList;
    }
}
