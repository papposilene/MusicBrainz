<?php

namespace MusicBrainz\Relation\Type\Recording\Recording;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Recording\Release;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @see  https://musicbrainz.org/doc/Mix_Terminology
 * @link https://musicbrainz.org/relationship/1baddd63-4539-4d49-ae43-600df9ef4647
 */
abstract class RemixesAndCompilations extends Release
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
