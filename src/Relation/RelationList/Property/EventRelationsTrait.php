<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToEventList;

/**
 * Provides a getter for the list of relations to an event.
 */
trait EventRelationsTrait
{
    /**
     * A list of relations to an event
     *
     * @var RelationToEventList
     */
    private $eventRelations;

    /**
     * Returns a list of relations to an event.
     *
     * @return RelationToEventList
     */
    public function getEventRelations(): RelationToEventList
    {
        return $this->eventRelations;
    }

    /**
     * Sets a list of relations to an event by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setEventRelationsFromArray(array $input): void
    {
        $this->eventRelations = is_null($input = ArrayAccess::getArray($input, EntityType::EVENT))
            ? new RelationToEventList
            : new RelationToEventList($input);
    }
}
