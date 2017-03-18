<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\MBID;

/**
 * Provides accessors for the MusicBrainz Identifier (MBID) of the entity.
 */
trait EntityIdAccessorTrait
{
    /**
     * The MusicBrainz Identifier (MBID) of the entity.
     *
     * @var MBID
     */
    private $entityId;

    /**
     * Returns the MusicBrainz Identifier (MBID) of the entity.
     *
     * @return MBID
     */
    public function getEntityId(): MBID
    {
        return $this->entityId;
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the entity.
     *
     * @param MBID $entityId The MusicBrainz Identifier (MBID) of the entity
     *
     * @return self
     */
    public function setEntityId(MBID $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }
}
