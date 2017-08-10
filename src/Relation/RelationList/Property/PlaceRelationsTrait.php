<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToPlaceList;

/**
 * Provides a getter for the list of relations to a place.
 */
trait PlaceRelationsTrait
{
    /**
     * A list of relations to a place
     *
     * @var RelationToPlaceList
     */
    private $placeRelations;

    /**
     * Returns a list of relations to a place.
     *
     * @return RelationToPlaceList
     */
    public function getPlaceRelations(): RelationToPlaceList
    {
        return $this->placeRelations;
    }

    /**
     * Sets a list of relations to a place by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setPlaceRelationsFromArray(array $input): void
    {
        $this->placeRelations = is_null($input = ArrayAccess::getArray($input, EntityType::PLACE))
            ? new RelationToPlaceList
            : new RelationToPlaceList($input);
    }
}
