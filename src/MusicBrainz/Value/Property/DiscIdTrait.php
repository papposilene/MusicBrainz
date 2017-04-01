<?php

namespace MusicBrainz\Value\Property;

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

}
