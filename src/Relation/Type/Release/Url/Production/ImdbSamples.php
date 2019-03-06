<?php

namespace MusicBrainz\Relation\Type\Release\Url\Production;

use MusicBrainz\Relation\Type\Recording\Url\GetTheMusic;
use MusicBrainz\Relation\Type\ReleaseGroup\Url\OtherDatabases\Imdb;
use MusicBrainz\Value\Name;

/**
 * This relationship is deprecated, since it's almost always misused. To specify that a recording on this release
 * contains samples taken from a movie, show or game, use the recording - URL relationship. If you don't know what
 * recording(s) use the samples, please just indicate it in the annotation.
 *
 * To say that the release is a soundtrack, please use the IMDB relationship type for release groups.
 *
 * @see  Imdb
 * @see  https://www.imdb.com/
 * @link https://musicbrainz.org/relationship/7387c5a2-9abe-4515-b667-9eb5ed4dd4ce
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
