<?php

namespace MusicBrainz\Relation\Type\Place\Work\WrittenAt;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Place\Work\Commissioned;

/**
 * This links a work with the place it was translated at.
 *
 * @link https://musicbrainz.org/relationship/1ff44f30-3e21-493a-b97e-dab30a9b295f
 */
class TranslatedAt extends Commissioned
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('translated at');
    }
}
