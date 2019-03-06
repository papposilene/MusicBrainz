<?php

namespace MusicBrainz\Relation\Type\Label\Recording\ContractedTasks;

use MusicBrainz\Relation\Type\Label\Recording\ContractedTasks;
use MusicBrainz\Value\Name;

/**
 * Use this relationship for credits like "Recording was produced by X for Label".
 *
 * @link https://musicbrainz.org/relationship/e43d91b4-23d8-4a20-848f-1e1a392e23f0
 */
class ProducedFor extends ContractedTasks
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('produced for');
    }
}
