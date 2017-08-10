<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToInstrumentList;

/**
 * Provides a getter for the list of relations to an instrument.
 */
trait InstrumentRelationsTrait
{
    /**
     * A list of relations to an instrument
     *
     * @var RelationToInstrumentList
     */
    private $instrumentRelations;

    /**
     * Returns a list of relations to an instrument.
     *
     * @return RelationToInstrumentList
     */
    public function getInstrumentRelations(): RelationToInstrumentList
    {
        return $this->instrumentRelations;
    }

    /**
     * Sets a list of relations to an instrument by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setInstrumentRelationsFromArray(array $input): void
    {
        $this->instrumentRelations = is_null($input = ArrayAccess::getArray($input, EntityType::INSTRUMENT))
            ? new RelationToInstrumentList
            : new RelationToInstrumentList($input);
    }
}
