<?php

namespace MusicBrainz\Relation\Target;

use MusicBrainz\Relation;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\ReleaseGroup;

/**
 * A release group relation
 */
class RelationToReleaseGroup extends Relation
{
    /**
     * The related release group
     *
     * @var ReleaseGroup
     */
    private $releaseGroup;

    /**
     * Sets the related release group.
     *
     * @param array $releaseGroup Information about the related release group
     *
     * @return void
     */
    protected function setRelatedEntity(array $releaseGroup): void
    {
        $this->releaseGroup = new ReleaseGroup($releaseGroup);
    }

    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::RELEASE_GROUP);
    }
}
