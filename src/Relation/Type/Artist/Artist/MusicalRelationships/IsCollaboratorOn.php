<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

/**
 * An "is collaborator on" relation
 * This links an (fictional) artist to the person that voice acted it.
 *
 * https://musicbrainz.org/relationship/75c09861-6857-4ec0-9729-84eefde7fc86
 */
class IsCollaboratorOn extends MusicalRelationships
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('collaborator');
    }
}
