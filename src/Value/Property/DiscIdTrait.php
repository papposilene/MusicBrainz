<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\DiscId;

/**
 * Provides a getter for a disc ID.
 */
trait DiscIdTrait
{
    /**
     * The disc ID
     *
     * @var DiscId
     */
    public $discId;

    /**
     * Returns the barcode.
     *
     * @return DiscId
     */
    public function getDiscId(): DiscId
    {
        return $this->discId;
    }

    /**
     * Sets the latitude by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setDiscIdFromArray(array $input): void
    {
        $this->discId = is_null($discId = ArrayAccess::getString($input, 'id'))
            ? new DiscId
            : new DiscId($discId);
    }
}
