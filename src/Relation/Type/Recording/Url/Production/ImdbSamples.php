<?php

namespace MusicBrainz\Relation\Type\Recording\Url\Production;

use MusicBrainz\Relation\Type\Recording\Url\GetTheMusic;
use MusicBrainz\Relation\Type\ReleaseGroup\Url\OtherDatabases\Imdb;
use MusicBrainz\Value\Name;

/**
 * This relationship type describes that the recording contains samples taken from a movie, show or game, which has an
 * IMDB page at the given URL.
 *
 * To say that the recording is part of a soundtrack, please use the IMDB relationship type for release groups.
 *
 * @see  Imdb
 * @see  https://www.imdb.com/
 * @link https://musicbrainz.org/relationship/dad34b86-5a1a-4628-acf5-a48ccb0785f2
 */
class ImdbSamples extends GetTheMusic
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('IMDB samples');
    }
}
