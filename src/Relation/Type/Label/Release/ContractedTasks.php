<?php

namespace MusicBrainz\Relation\Type\Label\Release;

use MusicBrainz\Relation\Type\Label\Release;
use MusicBrainz\Value\Name;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/19585b83-6783-4dff-9e4a-0ca56fe0ee8a
 */
abstract class ContractedTasks extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('contracted tasks');
    }
}
