<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\PrimaryName;

/**
 * Provides a getter for the "primary name" flag.
 */
trait PrimaryNameTrait
{
    /**
     * A "primary name" flag
     *
     * @var PrimaryName
     */
    private $primaryName;

    /**
     * Returns the "primary name" flag
     *
     * @return PrimaryName
     */
    public function getPrimaryName(): PrimaryName
    {
        return $this->primaryName;
    }

    /**
     * Sets the primary name by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setPrimaryNameFromArray(array $input): void
    {
        $this->primaryName = is_null($primaryName = ArrayAccess::getBool($input, 'primary'))
            ? new PrimaryName
            : new PrimaryName($primaryName);
    }
}
