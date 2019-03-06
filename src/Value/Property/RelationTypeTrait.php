<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Relation\Type;

/**
 * Provides a getter for the type of relation.
 */
trait RelationTypeTrait
{
    /**
     * A type of relation
     *
     * @var Type
     */
    private $relationType;

    /**
     * Returns type of relation.
     *
     * @return Type
     */
    public function getRelationType(): Type
    {
        return $this->relationType;
    }

    /**
     * Sets the type of relation.
     *
     * @param Type $relationType A relation type
     *
     * @return void
     */
    private function setRelationType(Type $relationType): void
    {
        $this->relationType = $relationType;
    }
}
