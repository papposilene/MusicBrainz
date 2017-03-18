<?php

namespace MusicBrainz\Api\Lookup\Field;

trait ArtistRelationsTrait
{
    /**
     * True, if artist relations should be included, otherwise false
     *
     * @var bool
     */
    private $artistRelations = false;

    /**
     * Returns true, if artist relations should be included, otherwise false.
     *
     * @return bool
     */
    public function isArtistRelations(): bool
    {
        return $this->artistRelations;
    }

    /**
     * Sets whether artist relations should be included.
     *
     * @param bool $artistRelations True, if artist relations should be included, otherwise false
     *
     * @return self
     */
    public function setArtistRelations(bool $artistRelations = true): self
    {
        $this->artistRelations = $artistRelations;

        return $this;
    }
}
