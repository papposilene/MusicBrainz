<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ISWCList;

/**
 * Provides a getter for a list of International Standard Musical Work Codes (ISWC).
 */
trait IswcsTrait
{
    /**
     * A list of International Standard Musical Work Codes (ISWC)
     *
     * @var ISWCList
     */
    private $iswcs;

    /**
     * Returns a list of International Standard Musical Work Codes (ISWC).
     *
     * @return ISWCList
     */
    public function getIswcs(): ISWCList
    {
        return $this->iswcs;
    }
}
