<?php

namespace MusicBrainz\Value;

/**
 * An entity type
 */
class EntityType
{
    /**
     * The entity type code
     *
     * @var string
     */
    private $entityTypeCode;

    /**
     * Constructs an entity type.
     *
     * @param string $entityTypeCode The entity type code
     */
    public function __construct(string $entityTypeCode = '')
    {
        $this->entityTypeCode = $entityTypeCode;
    }

    /**
     * Returns the entity type code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->entityTypeCode;
    }
}
