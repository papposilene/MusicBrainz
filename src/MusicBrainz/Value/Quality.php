<?php

namespace MusicBrainz\Value;

/**
 * A quality
 */
class Quality
{
    /**
     * Low quality
     *
     * @var string
     */
    public const LOW = 'low';

    /**
     * Low quality
     *
     * @var string
     */
    public const NORMAL = 'normal';

    /**
     * Low quality
     *
     * @var string
     */
    public const HIGH = 'high';

    /**
     * Undefined quality
     *
     * @var string
     */
    public const UNDEFINED = 'undefined';

    /**
     * A list of valid quality codes.
     *
     * @var array
     */
    public const QUALITY_CODES = [
        self::LOW,
        self::NORMAL,
        self::HIGH
    ];

    /**
     * The quality code
     *
     * @var string
     */
    private $qualityCode;

    /**
     * Constructs a quality.
     *
     * @param string $qualityCode The quality code
     */
    public function __construct(string $qualityCode = self::UNDEFINED)
    {
        $this->qualityCode = (in_array($qualityCode, self::QUALITY_CODES)) ? $qualityCode : self::UNDEFINED;
    }

    /**
     * Returns the relevance quality as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (null === $this->qualityCode)
            ? ''
            : $this->qualityCode;
    }
}
