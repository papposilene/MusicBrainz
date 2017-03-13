<?php

namespace MusicBrainz\Value\Accessor;

/**
 * Provides a getter for a name.
 */
trait GetNameTrait
{
    /**
     * The official name of the artist, be it a person or a band
     *
     * @var string
     */
    public $name;

    /**
     * Returns the official name of the artist.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
