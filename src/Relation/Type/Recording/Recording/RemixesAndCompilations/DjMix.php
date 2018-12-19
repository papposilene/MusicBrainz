<?php

namespace MusicBrainz\Relation\Type\Recording\Recording\RemixesAndCompilations;

use MusicBrainz\Relation\Type\Artist\Recording\RemixesAndCompilations\MixDj;
use MusicBrainz\Relation\Type\Recording\Recording\RemixesAndCompilations;
use MusicBrainz\Value\Name;

/**
 * This is used to link a DJ-mixed recording to each of the source recordings. See DJ-mixer for crediting the person who
 * created the DJ-mix.
 *
 * @see  https://musicbrainz.org/doc/Mix_Terminology#DJ_mix
 * @see  MixDj
 * @link https://musicbrainz.org/relationship/451076df-61cf-46ab-9921-555cab2f050d
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
