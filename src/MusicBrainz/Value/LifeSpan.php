<?php

namespace MusicBrainz\Value;

/**
 * A life span.
 *
 * @see https://musicbrainz.org/doc/IPI
 */
class LifeSpan
{
    /**
     * The begin date indicates when an artist started its existence. Its exact meaning depends on the type of artist:
     *
     * - For a person: Begin date represents date of birth
     * - For a group (or orchestra/choir): Begin date represents the date when the group first formed. If a group
     *   dissolved and then reunited, the date is still that of when they first formed.
     * - For a character: Begin date represents the date (in real life) when the character concept was created. In
     *   particular, the begin date is not used to hold the fictional birth date of a character.
     * - For others: There are no clear indications about how to use dates for artists of the type "Other" at the moment.
     *
     * @var Date
     */
    private $begin;

    /**
     * The end date indicate when an artist finished its existence. Its exact meaning depends on the type of artist:
     *
     * - For a person: End date represents date of death. If the person is still alive, the end date is null.
     * - For a group (or orchestra/choir): End date represents the date when the group last dissolved. If a group
     *   dissolved and then reunited, the date is that of when they last dissolved. If they are together, it is null.
     * - For a character: The end date is not set, since new media featuring a character can be created at any time. In
     *   particular, the end date field ist not used to hold the fictional death date of a character.
     * - For others: There are no clear indications about how to use dates for artists of the type "Other" at the moment.
     *
     * @var Date
     */
    private $ended;

    /**
     * Constructs a life span.
     *
     * @param array $lifeSpan An array with begin and end date
     */
    public function __construct(array $lifeSpan)
    {
        $begin = isset($lifeSpan['begin']) ? (string) $lifeSpan['begin'] : '';
        $ended = isset($lifeSpan['ended']) ? (string) $lifeSpan['ended'] : '';

        $this->begin = new Date($begin);
        $this->ended = new Date($ended);
    }

    /**
     * Returns the begin date.
     *
     * @return Date
     */
    public function getBegin(): Date
    {
        return $this->begin;
    }

    /**
     * Returns the end date.
     *
     * @return Date
     */
    public function getEnded(): Date
    {
        return $this->ended;
    }
}
