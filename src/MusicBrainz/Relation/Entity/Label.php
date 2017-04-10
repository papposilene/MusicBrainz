<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Label extends AbstractRelation
{
    /**
     * Constructs a relation of a label.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::LABEL));
    }

    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseTrait;
}
