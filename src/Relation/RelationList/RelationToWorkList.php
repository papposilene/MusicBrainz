<?php

namespace MusicBrainz\Relation\RelationList;

use MusicBrainz\Relation\RelationTo\RelationToWork;
use MusicBrainz\Value\ValueList;

/**
 * A list of work relations
 */
class RelationToWorkList extends ValueList
{
    /**
     * Constructs a list of work relations.
     *
     * @param array $workRelations A list of work relations
     */
    public function __construct(array $workRelations = [])
    {
        parent::__construct($workRelations);
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return RelationToWork::class;
    }
}
