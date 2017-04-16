<?php

namespace MusicBrainz\Value\Property;

/**
 * Provides a getter for the description.
 */
trait Description
{
    /**
     * The description
     *
     * @var string
     */
    private $description;

    /**
     * Returns the description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
