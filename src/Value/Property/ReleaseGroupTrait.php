<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseGroup;

/**
 * Provides a getter for a release group.
 */
trait ReleaseGroupTrait
{
    /**
     * The release group
     *
     * @var ReleaseGroup
     */
    public $releaseGroup;

    /**
     * Returns the release.
     *
     * @return ReleaseGroup
     */
    public function getReleaseGroup(): ReleaseGroup
    {
        return $this->releaseGroup;
    }

}
