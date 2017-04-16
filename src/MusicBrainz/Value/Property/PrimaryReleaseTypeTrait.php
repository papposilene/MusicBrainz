<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseType;

/**
 * Provides a getter for the primary release type.
 */
trait PrimaryReleaseTypeTrait
{
    /**
     * The primary release type
     *
     * @var ReleaseType
     */
    private $primaryReleaseType;

    /**
     * Returns the release status.
     *
     * @return ReleaseType
     */
    public function getPrimaryReleaseType(): ReleaseType
    {
        return $this->primaryReleaseType;
    }
}
