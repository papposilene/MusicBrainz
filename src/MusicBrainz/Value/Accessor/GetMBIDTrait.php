<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\MBID;

/**
 * Provides a getter for the MusicBrainz Identifier (MBID).
 */
trait GetMBIDTrait
{
    /**
     * The MusicBrainz Identifier (MBID)
     *
     * @var MBID
     *
     * @see https://musicbrainz.org/doc/MusicBrainz_Identifier
     */
    private $MBID;

    /**
     * Returns the MusicBrainz Identifier (MBID).
     *
     * @return MBID
     */
    public function getMBID(): MBID
    {
        return $this->MBID;
    }
}
