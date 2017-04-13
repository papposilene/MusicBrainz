<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ASIN;

/**
 * Provides a getter for the Amazon Standard Identification Number (ASIN).
 */
trait ASINTrait
{
    /**
     * The Amazon Standard Identification Number (ASIN)
     *
     * @var ASIN
     */
    private $asin;

    /**
     * Returns the Amazon Standard Identification Number (ASIN).
     *
     * @return ASIN
     */
    public function getArea(): ASIN
    {
        return $this->asin;
    }
}
