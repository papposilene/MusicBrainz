<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ArtistCreditList;

/**
 * Provides a getter for a list of artist credits.
 */
trait ArtistCreditsTrait
{
    /**
     * A list of artist credits
     *
     * @var ArtistCreditList
     */
    private $artistCredits;

    /**
     * Returns a list of artist credits.
     *
     * @return ArtistCreditList
     */
    public function getArtistCredits(): ArtistCreditList
    {
        return $this->artistCredits;
    }
}
