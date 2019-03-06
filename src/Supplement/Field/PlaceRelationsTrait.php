<?php

namespace MusicBrainz\Supplement\Field;

trait PlaceRelationsTrait
{
    /**
     * True, if place relations should be included, otherwise false
     *
     * @var bool
     */
    private $placeRelations = false;

    /**
     * Returns true, if place relations should be included, otherwise false.
     *
     * @return bool
     */
    public function getIncludeFlagForPlaceRelations(): bool
    {
        return $this->placeRelations;
    }

    /**
     * Sets whether place relations should be included.
     *
     * @param bool $placeRelations True, if place relations should be included, otherwise false
     *
     * @return self
     */
    public function includePlaceRelations(bool $placeRelations = true): self
    {
        $this->placeRelations = $placeRelations;

        return $this;
    }
}
