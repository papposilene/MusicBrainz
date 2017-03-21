<?php

namespace MusicBrainz\Supplement\Field;

trait ReleaseGroupRelationsTrait
{
    /**
     * True, if release group relations should be included, otherwise false
     *
     * @var bool
     */
    private $releaseGroupRelations = false;

    /**
     * Returns true, if release group relations should be included, otherwise false.
     *
     * @return bool
     */
    public function isReleaseGroupRelations(): bool
    {
        return $this->releaseGroupRelations;
    }

    /**
     * Sets whether release group relations should be included.
     *
     * @param bool $releaseGroupRelations True, if release group relations should be included, otherwise false
     *
     * @return self
     */
    public function setReleaseGroupRelations(bool $releaseGroupRelations = true): self
    {
        $this->releaseGroupRelations = $releaseGroupRelations;

        return $this;
    }
}
