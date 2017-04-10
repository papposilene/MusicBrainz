<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Work extends AbstractRelation
{
    /**
     * Constructs a relation of a work.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::WORK));
    }

    use \MusicBrainz\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
}
