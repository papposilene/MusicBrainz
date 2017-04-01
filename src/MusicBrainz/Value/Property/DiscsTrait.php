<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\DiscList;

/**
 * Provides a getter for a list of discs.
 */
trait DiscsTrait
{
    /**
     * A list of discs
     *
     * @var DiscList
     */
    private $discs;

    /**
     * Returns a list of discs.
     *
     * @return DiscList
     */
    public function getDiscs(): DiscList
    {
        return $this->discs;
    }
}
