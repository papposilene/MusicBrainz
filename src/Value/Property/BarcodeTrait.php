<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the barcode by extracting it from a given input array.
     *
     * @param array  $input An array returned by the webservice
     *
     * @return void
     */
    private function setBarcodeFromArray(array $input): void
    {
        $this->barcode = is_null($barcode = ArrayAccess::getString($input, 'barcode'))
            ? new Barcode
            : new Barcode($barcode);
    }
}
