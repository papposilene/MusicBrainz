<?php

namespace MusicBrainz\Supplement\Field;

trait URLRelationsTrait
{
    /**
     * True, if URL relations should be included, otherwise false
     *
     * @var bool
     */
    private $URLRelations = false;

    /**
     * Returns true, if URL relations should be included, otherwise false.
     *
     * @return bool
     */
    public function isURLRelations(): bool
    {
        return $this->URLRelations;
    }

    /**
     * Sets whether URL relations should be included.
     *
     * @param bool $URLRelations True, if URL relations should be included, otherwise false
     *
     * @return self
     */
    public function setURLRelations(bool $URLRelations = true): self
    {
        $this->URLRelations = $URLRelations;

        return $this;
    }
}
