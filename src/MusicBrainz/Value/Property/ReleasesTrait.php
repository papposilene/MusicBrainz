<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseList;

/**
 * Provides a getter for a list of releases.
 */
trait ReleasesTrait
{
    /**
     * A list of releases
     *
     * @var ReleaseList
     */
    private $releases;

    /**
     * Returns a list of releases.
     *
     * @return ReleaseList
     */
    public function getReleases(): ReleaseList
    {
        return $this->releases;
    }
}
