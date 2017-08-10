<?php

namespace MusicBrainz\Relation\Target;

use MusicBrainz\Relation;
use MusicBrainz\Value\Url;
use MusicBrainz\Value\EntityType;

/**
 * An URL relation
 */
class UrlRelation extends Relation
{
    /**
     * The related URL
     *
     * @var Url
     */
    private $url;

    /**
     * Sets the related URL.
     *
     * @param array $url Information about the related URL
     *
     * @return void
     */
    protected function setRelatedEntity(array $url): void
    {
        $this->url = new Url($url);
    }

    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::URL);
    }
}
