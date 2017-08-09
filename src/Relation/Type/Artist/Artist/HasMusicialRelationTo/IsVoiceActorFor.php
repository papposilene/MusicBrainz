<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

/**
 * An "is voice of" relation
 * This links an (fictional) artist to the person that voice acted it.
 *
 * https://musicbrainz.org/relationship/e259a3f5-ce8e-45c1-9ef7-90ff7d0c7589
 */
class IsVoiceActorFor extends HasMusicialRelationTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('voice actor');
    }
}
