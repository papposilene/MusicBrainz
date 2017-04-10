<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Place extends AbstractRelation
{
    /**
     * Constructs a relation of a place.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::PLACE));
    }

    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
}
