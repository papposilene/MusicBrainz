<?php

namespace MusicBrainz\Value\Property;

/**
 * Provides a getter for the primary name flag.
 */
trait PrimaryNameTrait
{
    /**
     * True, if the name is a primary name, otherwise false
     *
     * @var bool
     */
    private $primaryName;

    /**
     * Returns true, if the name is a primary name, otherwise false
     *
     * @return bool
     */
    public function getPrimaryName(): bool
    {
        return $this->primaryName;
    }
}
