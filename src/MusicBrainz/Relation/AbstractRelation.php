<?php

namespace MusicBrainz\Relation;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;

abstract class AbstractRelation
{
    /**
     * The entity type
     *
     * @var \MusicBrainz\Value\EntityType
     */
    private $entityType;

    /**
     * An entity type
     *
     * @var \MusicBrainz\Value\EntityType
     */
    private $relatedEntityType;

    /**
     * The MusicBrainz Identifier for the related entity
     *
     * @var MBID
     */
    private $relatedEntityId;

    /**
     * Constructs the relation.
     *
     * @param EntityType $entityType The type of the entity that has the relation
     */
    protected function __construct(EntityType $entityType)
    {
        $this->entityType = $entityType;
    }

    /**
     * Returns the type of the related entity.
     *
     * @return EntityType
     */
    public function getRelatedEntityType(): EntityType
    {
        return $this->relatedEntityType;
    }

    /**
     * Sets the type of the related entity.
     *
     * @param EntityType $relatedEntityType The type of the related entity
     */
    protected function setRelatedEntityType(EntityType $relatedEntityType): void
    {
        $this->relatedEntityType = $relatedEntityType;
    }

    /**
     * Returns the MusicBrainz Identifier of the related entity.
     *
     * @return MBID
     */
    public function getRelatedEntityId(): MBID
    {
        return $this->relatedEntityId;
    }

    /**
     * Sets the  MusicBrainz Identifier of the related entity.
     *
     * @param MBID $mbid The MusicBrainz Identifier of the related entity
     *
     * @return self
     */
    public function setRelatedEntityId(MBID $mbid): self
    {
        $this->relatedEntityId = $mbid;

        return $this;
    }
}
