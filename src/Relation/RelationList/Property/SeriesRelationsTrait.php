<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToSeriesList;

/**
 * Provides a getter for the list of relations to a series.
 */
trait SeriesRelationsTrait
{
    /**
     * A list of relations to a series
     *
     * @var RelationToSeriesList
     */
    private $seriesRelations;

    /**
     * Returns a list of relations to a series.
     *
     * @return RelationToSeriesList
     */
    public function getSeriesRelations(): RelationToSeriesList
    {
        return $this->seriesRelations;
    }

    /**
     * Sets a list of relations to a series by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setSeriesRelationsFromArray(array $input): void
    {
        $this->seriesRelations = is_null($input = ArrayAccess::getArray($input, EntityType::SERIES))
            ? new RelationToSeriesList
            : new RelationToSeriesList($input);
    }
}
