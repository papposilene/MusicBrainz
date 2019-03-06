<?php

namespace MusicBrainz\Relation\RelationList;

use MusicBrainz\Helper\RelationFactory;

/**
 * A sorted list of relations an instrument stands in
 */
class InstrumentRelationList
{
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToAreaTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToArtistTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToInstrumentTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToLabelTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToUrlTrait;

    /**
     * Constructs a sorted list of relations an instrument stands in.
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

        $this->setAreaRelationsFromArray($relationList);
        $this->setArtistRelationsFromArray($relationList);
        $this->setInstrumentRelationsFromArray($relationList);
        $this->setLabelRelationsFromArray($relationList);
        $this->setUrlRelationsFromArray($relationList);
    }
}
