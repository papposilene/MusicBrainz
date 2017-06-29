<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the release status by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setReleaseStatusFromArray(array $input): void
    {
        $this->releaseStatus = is_null($releaseStatus = ArrayAccess::getString($input, 'status'))
            ? new ReleaseStatus
            : new ReleaseStatus($releaseStatus);
    }
}
