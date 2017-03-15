<?php

namespace MusicBrainz\Value\Accessor;

/**
 * Provides a getter for the primary name flag.
 */
trait GetPrimaryNameTrait
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
