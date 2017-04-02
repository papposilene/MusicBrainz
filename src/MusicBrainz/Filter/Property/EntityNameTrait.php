<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for an entity name.
 */
trait EntityNameTrait
{
    /**
     * The entity name.
     *
     * @var null|Name
     */
    private $entityName;

    /**
     * Returns the entity name.
     *
     * @return null|Name
     */
    public function getEntityName(): ?Name
    {
        return $this->entityName;
    }

    /**
     * Sets the entity name.
     *
     * @param null|Name $entityName The entity name
     *
     * @return self
     */
    public function setEntityName(?Name $entityName): self
    {
        $this->entityName = $entityName;

        return $this;
    }
}
