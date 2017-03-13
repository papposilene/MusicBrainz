<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Date;

/**
 * Provides a getter for the artist birth date/band founding date.
 */
trait GetBeginDateTrait
{
    use \MusicBrainz\Property\BeginDateTrait;

    /**
     * Returns the artist birth date/band founding date.
     *
     * @return null|Date
     */
    public function getBeginDate(): ?Date
    {
        return $this->getBeginDate();
    }
}
