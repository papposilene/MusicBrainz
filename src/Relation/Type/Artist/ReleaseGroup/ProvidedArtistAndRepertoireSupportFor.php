<?php

namespace MusicBrainz\Relation\Type\Artist\ReleaseGroup;

use MusicBrainz\Relation\Type\Artist\ReleaseGroup;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided artist and repertoire support for" relation
 * This indicates a person or agency which is responsible for talent scouting, overseeing the artistic development of an
 * artist, and acting as liaison between artists and the labels.
 *
 * @link https://musicbrainz.org/relationship/25dd0db4-189f-436c-a610-aacb979f13e2
 */
class ProvidedArtistAndRepertoireSupportFor extends ReleaseGroup
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('artists and repertoire');
    }
}
