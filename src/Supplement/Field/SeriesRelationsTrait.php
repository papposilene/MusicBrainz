<?php

namespace MusicBrainz\Supplement\Field;

trait SeriesRelationsTrait
{
    /**
     * True, if series relations should be included, otherwise false
     *
     * @var bool
     */
    private $seriesRelations = false;

    /**
     * Returns true, if series relations should be included, otherwise false.
     *
     * @return bool
     */
    public function getIncludeFlagForSeriesRelations(): bool
    {
        return $this->seriesRelations;
    }

    /**
     * Sets whether series relations should be included.
     *
     * @param bool $seriesRelations True, if series relations should be included, otherwise false
     *
     * @return self
     */
    public function includeSeriesRelations(bool $seriesRelations = true): self
    {
        $this->seriesRelations = $seriesRelations;

        return $this;
    }
}
