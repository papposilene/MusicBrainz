<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

/**
 * An "is teacher of" relation
 * This relationship indicates that a person was another's teacher/student.
 *
 * https://musicbrainz.org/relationship/249fc24f-d573-4290-9d74-0547712d1f1e
 */
class IsTeacherOf extends HasMusicialRelationTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('teacher');
    }
}
