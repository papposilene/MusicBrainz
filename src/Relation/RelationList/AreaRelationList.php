<?php

namespace MusicBrainz\Relation\RelationList;

use MusicBrainz\Helper\RelationFactory;

/**
 * A sorted list of relations an area stands in
 */
class AreaRelationList
{
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToAreaTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToEventTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToInstrumentTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToRecordingTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToReleaseTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToUrlTrait;
    use \MusicBrainz\Relation\Target\RelationList\Property\RelationsToWorkTrait;

    /**
     * Constructs a sorted list of relations an area stands in.
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
        $this->setEventRelationsFromArray($relationList);
        $this->setInstrumentRelationsFromArray($relationList);
        $this->setRecordingRelationsFromArray($relationList);
        $this->setReleaseRelationsFromArray($relationList);
        $this->setUrlRelationsFromArray($relationList);
        $this->setWorkRelationsFromArray($relationList);
    }
}
