<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Misc;

use MusicBrainz\Relation\Type\Artist\Recording\Misc;
use MusicBrainz\Value\Name;

/**
 * This credits the people or agency who did the graphic design, arranging pieces of content into a coherent and
 * aesthetically-pleasing sleeve design.
 *
 * @link https://musicbrainz.org/relationship/38751410-ee52-435b-af75-957cb4c34149
 */
class GraphicDesign extends Misc
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
