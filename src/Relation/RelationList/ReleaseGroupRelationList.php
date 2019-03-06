<?php

namespace MusicBrainz\Relation\RelationList;

use MusicBrainz\Helper\RelationFactory;

/**
 * A sorted list of relations a release group stands in
 */
class ReleaseGroupRelationList
{
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToArtistTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToEventTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToLabelTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToReleaseGroupTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToSeriesTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToUrlTrait;

    /**
     * Constructs a sorted list of relations a release stands in.
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
        $this->setEventRelationsFromArray($relationList);
        $this->setLabelRelationsFromArray($relationList);
        $this->setReleaseGroupRelationsFromArray($relationList);
        $this->setSeriesRelationsFromArray($relationList);
        $this->setUrlRelationsFromArray($relationList);
    }
}
