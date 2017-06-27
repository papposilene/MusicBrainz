<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A life span.
 *
 * @link https://musicbrainz.org/doc/Artist
 */
class LifeSpan implements Value
{
    use Property\BeginDateTrait;
    use Property\EndDateTrait;
    use Property\EndedTrait;

    /**
     * Constructs a life span.
     *
     * @param array $lifeSpan An array of information about a life span
     */
    public function __construct(array $lifeSpan = [])
    {
        $this->beginDate = isset($lifeSpan['begin']) ? new Date($lifeSpan['begin'])  : new Date;
        $this->endDate   = isset($lifeSpan['end'])   ? new Date($lifeSpan['end'])    : new Date;
        $this->ended     = isset($lifeSpan['ended']) ? new Ended($lifeSpan['ended']) : new Ended;
    }

    /**
     * Returns the life span as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return ($this->getEnded()->isEnded())
            ? $this->getBeginDate()
            : $this->getBeginDate() . '–' . $this->getEndDate();
    }
}
