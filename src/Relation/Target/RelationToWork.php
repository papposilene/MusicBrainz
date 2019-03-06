<?php

namespace MusicBrainz\Relation\Target;

use MusicBrainz\Relation;
use MusicBrainz\Value\Work;
use MusicBrainz\Value\EntityType;

/**
 * A work relation
 */
class RelationToWork extends Relation
{
    /**
     * The related work
     *
     * @var Work
     */
    private $work;

    /**
     * Sets the related work.
     *
     * @param array $work Information about the related work
     *
     * @return void
     */
    protected function setRelatedEntity(array $work): void
    {
        $this->work = new Work($work);
    }

    /**
     * Returns the related work.
     *
     * @return Work
     */
    public function getWork(): Work
    {
        return $this->work;
    }

    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::WORK);
    }
}
