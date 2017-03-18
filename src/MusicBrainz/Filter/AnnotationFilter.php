<?php

namespace MusicBrainz\Filter;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A filter for searching annotations
 */
class AnnotationFilter
{
    use Accessor\EntityNameAccessorTrait;
    use Accessor\EntityIdAccessorTrait;
    use Accessor\TextAccessorTrait;
    use Accessor\EntityTypeAccessorTrait;

    /**
     * Constructs an annotation filter.
     */
    public function __construct()
    {
        $this->setEntityName(new Name);
        $this->setEntityId(new MBID);
        $this->setText();
        $this->setEntityType(new EntityType);
    }
}
