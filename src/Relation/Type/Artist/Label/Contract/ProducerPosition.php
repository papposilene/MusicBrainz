<?php

namespace MusicBrainz\Relation\Type\Artist\Label\Contract;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label\Contract;

/**
 * This indicates that an artist was officially employed by a label as a producer.
 *
 * @link https://musicbrainz.org/relationship/46981330-d73c-4ba5-845f-47f467072cf8
 */
class ProducerPosition extends Contract
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('producer position');
    }
}
