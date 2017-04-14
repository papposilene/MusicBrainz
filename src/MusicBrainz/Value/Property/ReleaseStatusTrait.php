<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseStatus;

/**
 * Provides a getter for a release status.
 */
trait ReleaseStatusTrait
{
    /**
     * The release status
     *
     * @var ReleaseStatus
     */
    private $releaseStatus;

    /**
     * Returns the release status.
     *
     * @return ReleaseStatus
     */
    public function getReleaseStatus(): ReleaseStatus
    {
        return $this->releaseStatus;
    }
}
