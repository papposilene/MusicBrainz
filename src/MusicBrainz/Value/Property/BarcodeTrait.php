<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Barcode;

/**
 * Provides a getter for a barcode.
 */
trait BarcodeTrait
{
    /**
     * The barcode
     *
     * @var Barcode
     */
    public $barcode;

    /**
     * Returns the barcode.
     *
     * @return Barcode
     */
    public function getBarcode(): Barcode
    {
        return $this->barcode;
    }

}
