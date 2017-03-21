<?php

namespace MusicBrainz\Supplement\Field;

trait WorkLevelRelationsTrait
{
    /**
     * True, if work level relations should be included, otherwise false
     *
     * @var bool
     */
    private $workLevelRelations = false;

    /**
     * Returns true, if work level relations should be included, otherwise false.
     *
     * @return bool
     */
    public function isWorkLevelRelations(): bool
    {
        return $this->workLevelRelations;
    }

    /**
     * Sets whether work level relations should be included.
     *
     * @param bool $workLevelRelations True, if work level relations should be included, otherwise false
     *
     * @return self
     */
    public function setWorkLevelRelations(bool $workLevelRelations = true): self
    {
        $this->workLevelRelations = $workLevelRelations;

        return $this;
    }
}
