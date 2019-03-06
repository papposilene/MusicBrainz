<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Misc;

use MusicBrainz\Relation\Type\Artist\Work\Misc;
use MusicBrainz\Value\Name;

/**
 * Indicates an artist (generally a composer) this work was previously attributed to, but who is currently confirmed
 * (or very strongly suspected) not to be the real author.
 *
 * @link https://musicbrainz.org/relationship/7231dcac-d2dc-4b4a-b218-ecea4123a4cd
 */
class PriviouslyAttribution extends Misc
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('previous attribution');
    }
}
