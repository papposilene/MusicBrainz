<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Recording extends AbstractRelation
{
    /**
     * Constructs a relation of a recording.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::RECORDING));
    }

    use \MusicBrainz\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseTrait;
}
