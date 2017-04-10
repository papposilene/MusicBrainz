<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Value\EntityType;

class Artist extends AbstractRelation
{
    /**
     * Constructs a relation of an artist.
     */
    public function __construct()
    {
        parent::__construct(new EntityType(EntityType::ARTIST));
    }

    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\RecordingTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseGroupTrait;
    use \MusicBrainz\Relation\RelatedEntity\WorkTrait;
}
