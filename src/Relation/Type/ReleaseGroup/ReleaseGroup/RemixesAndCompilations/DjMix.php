<?php

namespace MusicBrainz\Relation\Type\ReleaseGroup\ReleaseGroup\RemixesAndCompilations;

use MusicBrainz\Relation\Type\Artist\Recording\RemixesAndCompilations\MixDj;
use MusicBrainz\Relation\Type\Recording\Recording\RemixesAndCompilations;
use MusicBrainz\Value\Name;

/**
 * This is used to link a release group containing a DJ-mixed version of a release to the release group containing the
 * source release. See DJ-mixer for crediting the person who created the DJ-mix.
 *
 * @see  https://musicbrainz.org/doc/Mix_Terminology#DJ_mix
 * @see  MixDj
 * @link https://musicbrainz.org/relationship/d3286b50-a9d9-4cc3-94ad-cd7e2ffc787a
 */
class DjMix extends RemixesAndCompilations
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('DJ-mix');
    }
}
