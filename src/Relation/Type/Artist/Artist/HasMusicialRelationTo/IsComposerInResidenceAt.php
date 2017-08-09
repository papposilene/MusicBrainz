<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

/**
 * An "is composer-in-residence at" relation
 * This links a group (often an orchestra) to a composer who has a composer-in-residence position with the group.
 *
 * https://musicbrainz.org/relationship/094b1ddf-3df3-4fb9-8b01-cfd28e45da80
 */
class IsComposerInResidenceAt extends HasMusicialRelationTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('composer-in-residence');
    }
}
