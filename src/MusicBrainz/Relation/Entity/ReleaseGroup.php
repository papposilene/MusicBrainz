<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class ReleaseGroup extends AbstractRelation
{
    /**
     * Constructs a relation of a release group.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::RELEASE_GROUP));
    }

    use \MusicBrainz\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseTrait;
}
