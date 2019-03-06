<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\IPI;
use MusicBrainz\Value\IPIList;

/**
 * Provides a getter for a list of IPI codes.
 */
trait IpisTrait
{
    /**
     * A list of IPI codes
     *
     * @var IPI[]|IPIList
     *
     * @see https://musicbrainz.org/doc/IPI
     */
    private $ipis;

    /**
     * Returns a list of IPI codes.
     *
     * @return IPI[]|IPIList
     */
    public function getIpis(): IPIList
    {
        return $this->ipis;
    }

    /**
     * Sets a list of IPI codes by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setIpisFromArray(array $input): void
    {
        $this->ipis = is_null($ipis = ArrayAccess::getArray($input, 'ipis'))
            ? new IPIList
            : new IPIList($ipis);
    }
}
