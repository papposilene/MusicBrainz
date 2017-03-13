<?php

namespace MusicBrainz\Value\Accessor;

/**
 * Provides a getter for the MusicBrainz Identifier (MBID).
 */
trait GetMBIDTrait
{
    /**
     * The MusicBrainz Identifier (MBID)
     *
     * @var string
     *
     * @see https://musicbrainz.org/doc/MusicBrainz_Identifier
     */
    private $MBID;

    /**
     * Returns the MusicBrainz Identifier (MBID).
     *
     * @return string
     */
    public function getMBID(): string
    {
        return $this->MBID;
    }
}
