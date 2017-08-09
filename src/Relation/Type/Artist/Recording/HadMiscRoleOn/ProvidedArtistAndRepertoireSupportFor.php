<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided artist and repertoire support for" relation
 * This indicates a person or agency which is responsible for talent scouting, overseeing the artistic development of an
 * artist, and acting as liaison between artists and the labels.
 *
 * @link https://musicbrainz.org/relationship/8dc10cef-3116-4b3d-8e3e-33ffb84a97df
 */
class ProvidedArtistAndRepertoireSupportFor extends HadMiscRoleOn
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
