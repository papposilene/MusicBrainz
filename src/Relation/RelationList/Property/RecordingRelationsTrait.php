<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToRecordingList;

/**
 * Provides a getter for the list of relations to a recording.
 */
trait RecordingRelationsTrait
{
    /**
     * A list of relations to a recording
     *
     * @var RelationToRecordingList
     */
    private $recordingRelations;

    /**
     * Returns a list of relations to a recording.
     *
     * @return RelationToRecordingList
     */
    public function getRecordingRelations(): RelationToRecordingList
    {
        return $this->recordingRelations;
    }

    /**
     * Sets a list of relations to a recording by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setRecordingRelationsFromArray(array $input): void
    {
        $this->recordingRelations = is_null($input = ArrayAccess::getArray($input, EntityType::RECORDING))
            ? new RelationToRecordingList
            : new RelationToRecordingList($input);
    }
}
