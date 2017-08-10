<?php

namespace MusicBrainz\Relation\RelationList;

use MusicBrainz\Relation\RelationTo\RelationToInstrument;
use MusicBrainz\Value\ValueList;

/**
 * A list of instrument relations
 */
class RelationToInstrumentList extends ValueList
{
    /**
     * Constructs a list of instrument relations.
     *
     * @param array $instrumentRelations A list of instrument relations
     */
    public function __construct(array $instrumentRelations = [])
    {
        parent::__construct($instrumentRelations);
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return RelationToInstrument::class;
    }
}
