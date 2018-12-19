<?php

namespace MusicBrainz\Relation\Type\ReleaseGroup\ReleaseGroup;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\ReleaseGroup\ReleaseGroup;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @see  https://musicbrainz.org/doc/Mix_Terminology
 * @link https://musicbrainz.org/relationship/3494ba38-4ac5-40b6-aa6f-4ac7546cd104
 */
abstract class RemixesAndCompilations extends ReleaseGroup
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('remixes and compilations');
    }
}
