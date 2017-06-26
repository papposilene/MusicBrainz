<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Ended;

/**
 * Provides a getter for the "ended" flag.
 */
trait EndedTrait
{
    /**
     * An "ended" flag
     *
     * @var Ended
     */
    private $ended;

    /**
     * Returns the "ended" flag
     *
     * @return Ended
     */
    public function getEnded(): Ended
    {
        return $this->ended;
    }
}
