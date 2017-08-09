<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "appears on video" relation
 * This indicates that an artist appears on a music video, but doesn't actually perform on the audio track.
 *
 * @link https://musicbrainz.org/relationship/601fc03e-1058-4ee6-a546-b914d55aa6ba
 */
class AppearsOnVideo extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('video appearance');
    }
}
