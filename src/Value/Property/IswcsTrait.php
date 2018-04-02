<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the list of International Standard Musical Work Codes (ISWC) by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setIswcsFromArray(array $input): void
    {
        $this->iswcs = is_null($iswcs = ArrayAccess::getArray($input, 'iswcs'))
            ? new ISWCList
            : new ISWCList($iswcs);
    }
}
