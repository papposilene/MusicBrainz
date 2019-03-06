<?php

namespace MusicBrainz\Relation\Type\Artist\Release\RemixesAndCompilations;

use MusicBrainz\Value\Name;

/**
 * A "remixed" relation
 * This links a release to the person who remixed it by taking one or more other tracks, substantially altering them and
 * mixing them together with other material. Note that this includes the artist who created a mash-up or used samples as
 * well.
 *
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/ac6a86db-f757-4815-a07e-744428d2382b
 */
class RemixesAndCompilations extends \MusicBrainz\Relation\Type\Artist\Recording\RemixesAndCompilations
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('remixer');
    }
}
