<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ArtistCredit;

/**
 * Provides a getter for the artist credit.
 */
trait ArtistCreditTrait
{
    /**
     * The artist credit
     *
     * @var ArtistCredit
     */
    private $artistCredit;

    /**
     * Returns the artist credit.
     *
     * @return ArtistCredit
     */
    public function getArtistCredit(): ArtistCredit
    {
        return $this->artistCredit;
    }
}
