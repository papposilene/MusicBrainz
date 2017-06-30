<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;

/**
 * A relation between an area and another entity.
 */
class AreaRelation extends AbstractRelation
{
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
}
