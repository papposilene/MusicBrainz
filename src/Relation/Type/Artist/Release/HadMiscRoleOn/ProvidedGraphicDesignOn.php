<?php

namespace MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided graphic design on" relation
 * This credits the people or agency who did the graphic design, arranging pieces of content into a coherent and
 * aesthetically-pleasing sleeve design.
 *
 * @link https://musicbrainz.org/relationship/cf43b79e-3299-4b0c-9244-59ea06337107
 */
class ProvidedGraphicDesignOn extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('graphic design');
    }
}
