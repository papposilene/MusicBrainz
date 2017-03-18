<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for an entity name.
 */
trait EntityNameAccessorTrait
{
    /**
     * The entity name.
     *
     * @var Name
     */
    private $entityName;

    /**
     * Returns the entity name.
     *
     * @return Name
     */
    public function getEntityName(): Name
    {
        return $this->entityName;
    }

    /**
     * Sets the entity name.
     *
     * @param Name $entityName The entity name
     *
     * @return self
     */
    public function setEntityName(Name $entityName): self
    {
        $this->entityName = $entityName;

        return $this;
    }
}
