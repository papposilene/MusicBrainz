<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Packaging;

/**
 * Provides a getter for a packaging.
 */
trait PackagingTrait
{
    /**
     * The packaging
     *
     * @var Packaging
     */
    private $packaging;

    /**
     * Returns the packaging.
     *
     * @return Packaging
     */
    public function getPackaging(): Packaging
    {
        return $this->packaging;
    }
}
