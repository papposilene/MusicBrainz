<?php

namespace MusicBrainz\Relation\Type\ReleaseGroup\ReleaseGroup\CoversAndVersions;

use MusicBrainz\Relation\Type\ReleaseGroup\ReleaseGroup\CoversAndVersions;
use MusicBrainz\Relation\Type\Recording\Work\Performance;
use MusicBrainz\Value\Name;

/**
 * This relationship type is used to indicate that a release group is a cover version of another release group, i.e.
 * when an artist performs a new rendition of another artist's album. For individual songs, see the recording-work
 * performance relationship type.
 *
 * @see  Performance
 * @link https://musicbrainz.org/relationship/cf02e524-9d5b-46b7-a88e-329737395818
 */
class Cover extends CoversAndVersions
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('cover');
    }
}
