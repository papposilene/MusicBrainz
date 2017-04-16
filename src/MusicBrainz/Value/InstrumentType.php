<?php

namespace MusicBrainz\Value;

/**
 * An instrument type
 */
class InstrumentType
{
    /**
     * An electronic instrument
     *
     * @var string
     */
    public const ELECTRONIC_INSTRUMENT = 'Electronic instrument';

    /**
     * A percussion instrument
     *
     * @var string
     */
    public const PERCUSSION_INSTRUMENT = 'Percussion instrument';

    /**
     * A string instrument
     *
     * @var string
     */
    public const STRING_INSTRUMENT = 'String instrument';

    /**
     * A wind instrument
     *
     * @var string
     */
    public const WIND_INSTRUMENT = 'Wind instrument';

    /**
     * Another instrument
     *
     * @var string
     */
    public const OTHER_INSTRUMENT = 'Other instrument';

    /**
     * An undefined instrument type
     *
     * @var string
     */
    public const UNDEFINED = '';

    /**
     * A list of valid instrument types
     *
     * @var array
     */
    private const INSTRUMENT_TYPES = [
        self::ELECTRONIC_INSTRUMENT,
        self::PERCUSSION_INSTRUMENT,
        self::STRING_INSTRUMENT,
        self::WIND_INSTRUMENT,
        self::OTHER_INSTRUMENT
    ];

    /**
     * The instrument type code
     *
     * @var string
     */
    private $instrumentTypeCode;

    /**
     * Constructs an instrument type.
     *
     * @param string $instrumentTypeCode The instrument type code
     */
    public function __construct(string $instrumentTypeCode = self::UNDEFINED)
    {
        $this->instrumentTypeCode = in_array($instrumentTypeCode, self::INSTRUMENT_TYPES)
            ? $instrumentTypeCode
            : self::UNDEFINED;
    }

    /**
     * Returns the instrument type code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->instrumentTypeCode;
    }
}
