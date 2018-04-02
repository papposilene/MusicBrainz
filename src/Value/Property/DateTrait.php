<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Date;

/**
 * Provides a getter for the date.
 */
trait DateTrait
{
    /**
     * The date
     *
     * @var Date
     */
    private $date;

    /**
     * Returns the date.
     *
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * Sets the date by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setDateFromArray(array $input): void
    {
        $this->date = is_null($date = ArrayAccess::getString($input, 'date'))
            ? new Date
            : new Date($date);
    }
}
