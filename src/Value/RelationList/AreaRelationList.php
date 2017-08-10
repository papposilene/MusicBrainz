<?php

namespace MusicBrainz\Value\RelationList;

use MusicBrainz\Helper\RelationFactory;

/**
 * A sorted list of relations an area stands in
 */
class AreaRelationList
{
    use \MusicBrainz\Relation\RelationList\Property\AreaRelationsTrait;
    use \MusicBrainz\Relation\RelationList\Property\EventRelationsTrait;
    use \MusicBrainz\Relation\RelationList\Property\InstrumentRelationsTrait;
    use \MusicBrainz\Relation\RelationList\Property\RecordingRelationsTrait;
    use \MusicBrainz\Relation\RelationList\Property\ReleaseRelationsTrait;
    use \MusicBrainz\Relation\RelationList\Property\UrlRelationsTrait;
    use \MusicBrainz\Relation\RelationList\Property\WorkRelationsTrait;

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
        $this->setEventRelationsFromArray($relationList);
        $this->setInstrumentRelationsFromArray($relationList);
        $this->setRecordingRelationsFromArray($relationList);
        $this->setReleaseRelationsFromArray($relationList);
        $this->setUrlRelationsFromArray($relationList);
        $this->setWorkRelationsFromArray($relationList);
    }
}
