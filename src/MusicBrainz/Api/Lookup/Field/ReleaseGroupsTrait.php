<?php

namespace MusicBrainz\Api\Lookup\Field;

trait ReleaseGroupsTrait
{
    /**
     * True, if release groups should be included, otherwise false
     *
     * @var bool
     */
    private $releaseGroups = false;

    /**
     * Returns true, if release groups should be included, otherwise false.
     *
     * @return bool
     */
    public function isReleaseGroups(): bool
    {
        return $this->releaseGroups;
    }

    /**
     * Sets whether release groups should be included.
     *
     * @param bool $releaseGroups True, if release groups should be included, otherwise false
     *
     * @return self
     */
    public function setReleaseGroups(bool $releaseGroups = true): self
    {
        $this->releaseGroups = $releaseGroups;

        return $this;
    }
}
