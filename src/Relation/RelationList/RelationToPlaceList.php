<?php

namespace MusicBrainz\Relation\RelationList;

use MusicBrainz\Relation\RelationTo\RelationToPlace;
use MusicBrainz\Value\ValueList;

/**
 * A list of place relations
 */
class RelationToPlaceList extends ValueList
{
    /**
     * Constructs a list of place relations.
     *
     * @param array $placeRelations A list of place relations
     */
    public function __construct(array $placeRelations = [])
    {
        parent::__construct($placeRelations);
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return RelationToPlace::class;
    }
}
