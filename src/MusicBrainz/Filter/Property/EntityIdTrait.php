<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\MBID;

/**
 * Provides accessors for the MusicBrainz Identifier (MBID) of the entity.
 */
trait EntityIdTrait
{
    /**
     * The MusicBrainz Identifier (MBID) of the entity.
     *
     * @var null|MBID
     */
    private $entityId;

    /**
     * Returns the MusicBrainz Identifier (MBID) of the entity.
     *
     * @return null|MBID
     */
    public function getEntityId(): ?MBID
    {
        return $this->entityId;
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the entity.
     *
     * @param null|MBID $entityId The MusicBrainz Identifier (MBID) of the entity
     *
     * @return self
     */
    public function setEntityId(?MBID $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }
}
