<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\ReleaseType;

/**
 * Provides accessors for the release type.
 */
trait ReleaseTypeTrait
{
    /**
     * The release type.
     *
     * @var null|ReleaseType
     */
    private $releaseType;

    /**
     * Returns the release type.
     *
     * @return null|ReleaseType
     */
    public function getReleaseType(): ?ReleaseType
    {
        return $this->releaseType;
    }

    /**
     * Sets the release type.
     *
     * @param null|ReleaseType $releaseType The release type
     *
     * @return self
     */
    public function setReleaseType(?ReleaseType $releaseType): self
    {
        $this->releaseType = $releaseType;

        return $this;
    }
}
