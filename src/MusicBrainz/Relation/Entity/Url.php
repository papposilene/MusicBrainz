<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Url extends AbstractRelation
{
    /**
     * Constructs a relation of an URL.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::URL));
    }

    use \MusicBrainz\Relation\RelatedEntity\RecourceTrait;
}
