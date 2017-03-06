<?php

namespace MusicBrainz\Value;

/**
 * A date
 *
 * @see https://musicbrainz.org/doc/IPI
 */
class Date
{
    /**
     * The format for constructing a date
     * YYYY-MM-DD (leading zeros for months and days)
     *
     * @var string
     */
    private const FORMAT = 'Y-m-d';

    /**
     * Date and time
     *
     * @var null|\DateTime
     */
    private $dateTime;

    /**
     * Constructs a date
     *
     * @param string $date A date formatted as defined on top
     */
    public function __construct(string $date)
    {
        $dateTime = \DateTime::createFromFormat(self::FORMAT, $date);

        $this->dateTime = ($dateTime && $dateTime->format(self::FORMAT) === $date)
            ? $dateTime
            : null;
    }

    /**
     * Returns the date in the originally given format.
     *
     * @return null|string
     */
    public function __toString(): string
    {
        return ($this->dateTime)
            ? $this->dateTime->format(self::FORMAT)
            : null;
    }
}
