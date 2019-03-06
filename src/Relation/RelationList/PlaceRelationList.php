<?php

namespace MusicBrainz\Relation\RelationList;

use MusicBrainz\Helper\RelationFactory;

/**
 * A sorted list of relations a place stands in
 */
class PlaceRelationList
{
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToArtistTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToPlaceTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToRecordingTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToReleaseTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToUrlTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToWorkTrait;

    /**
     * Constructs a sorted list of relations an place stands in.
     *
     * @param array $relations Information about relations
     */
    public function __construct(array $relations = [])
    {
        $relationList = [];

        foreach ($relations as $relation) {
            $relation = RelationFactory::make($relation);
            $relationList[(string) $relation::getRelatedEntityType()][] = $relation;
        }

        $this->setArtistRelationsFromArray($relationList);
        $this->setPlaceRelationsFromArray($relationList);
        $this->setRecordingRelationsFromArray($relationList);
        $this->setReleaseRelationsFromArray($relationList);
        $this->setUrlRelationsFromArray($relationList);
        $this->setWorkRelationsFromArray($relationList);
    }
}
