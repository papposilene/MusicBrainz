<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Area extends AbstractRelation
{
    /**
     * Constructs a relation of an area.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::AREA));
    }

    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
}
