<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\IPIList;

/**
 * Provides a getter for a list of IPI codes.
 */
trait IpisTrait
{
    /**
     * A list of IPI codes
     *
     * @var IPIList
     *
     * @see https://musicbrainz.org/doc/IPI
     */
    private $ipis;

    /**
     * Returns a list of IPI codes.
     *
     * @return IPIList
     */
    public function getIpis(): IPIList
    {
        return $this->ipis;
    }
}
