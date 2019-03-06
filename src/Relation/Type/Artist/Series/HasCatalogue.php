<?php

namespace MusicBrainz\Relation\Type\Artist\Series;

use MusicBrainz\Relation\Type\Artist\Release;
use MusicBrainz\Value\Name;

/**
 * An "has catalogue" relation
 * This relationship is used to link a catalogue work series to a person whose work it catalogues.
 *
 * @link https://musicbrainz.org/relationship/b792d0a6-a443-4e00-8882-c4f2bef56511
 */
class HasCatalogue extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('has catalogue');
    }
}
