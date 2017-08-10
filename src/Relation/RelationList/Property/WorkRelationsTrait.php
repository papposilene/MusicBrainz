<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToWorkList;

/**
 * Provides a getter for the list of relations to a work.
 */
trait WorkRelationsTrait
{
    /**
     * A list of relations to a work
     *
     * @var RelationToWorkList
     */
    private $workRelations;

    /**
     * Returns a list of relations to a work.
     *
     * @return RelationToWorkList
     */
    public function getWorkRelations(): RelationToWorkList
    {
        return $this->workRelations;
    }

    /**
     * Sets a list of relations to a work by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setWorkRelationsFromArray(array $input): void
    {
        $this->workRelations = is_null($input = ArrayAccess::getArray($input, EntityType::WORK))
            ? new RelationToWorkList
            : new RelationToWorkList($input);
    }
}
