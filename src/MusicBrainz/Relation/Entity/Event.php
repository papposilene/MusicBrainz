<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Event extends AbstractRelation
{
    /**
     * Constructs a relation of an event.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::EVENT));
    }

    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\PlaceTrait;
}
