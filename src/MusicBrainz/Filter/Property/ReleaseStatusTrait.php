<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\ReleaseStatus;

/**
 * Provides accessors for the release status.
 */
trait ReleaseStatusTrait
{
    /**
     * The release status.
     *
     * @var null|ReleaseStatus
     */
    private $releaseStatus;

    /**
     * Returns the release status.
     *
     * @return null|ReleaseStatus
     */
    public function getReleaseStatus(): ?ReleaseStatus
    {
        return $this->releaseStatus;
    }

    /**
     * Sets the release status.
     *
     * @param null|ReleaseStatus $releaseStatus The release status
     *
     * @return self
     */
    public function setReleaseStatus(?ReleaseStatus $releaseStatus): self
    {
        $this->releaseStatus = $releaseStatus;

        return $this;
    }
}
