<?php

namespace MusicBrainz\Supplement\Field;

trait ReleaseRelationsTrait
{
    /**
     * True, if release relations should be included, otherwise false
     *
     * @var bool
     */
    private $releaseRelations = false;

    /**
     * Returns true, if release relations should be included, otherwise false.
     *
     * @return bool
     */
    public function isReleaseRelations(): bool
    {
        return $this->releaseRelations;
    }

    /**
     * Sets whether release relations should be included.
     *
     * @param bool $releaseRelations True, if release relations should be included, otherwise false
     *
     * @return self
     */
    public function setReleaseRelations(bool $releaseRelations = true): self
    {
        $this->releaseRelations = $releaseRelations;

        return $this;
    }
}
