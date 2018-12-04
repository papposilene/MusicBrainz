<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A release status
 *
 * @link https://musicbrainz.org/doc/Style/Release
 */
class ReleaseStatus implements Value
{
    /**
     * Official
     *
     * @var string
     */
    public const OFFICIAL = 'Official';

    /**
     * Promotional release
     *
     * @var string
     */
    public const PROMOTION = 'Promotion';

    /**
     * A bootleg
     *
     * @var string
     */
    public const BOOTLEG = 'Bootleg';

    /**
     * A pseudo-release
     * Pseudo-release should be used for translations or transliterations that do not appear on an actual release (even
     * if they appear on an official site).
     *
     * @var string
     */
    public const PSEUDO_RELEASE = 'Pseudo-Release';

    /**
     * An undefined release status
     *
     * @var string
     */
    public const UNDEFINED = 'Undefined';

    /**
     * A list of valid status codes
     *
     * @var array
     */
    public const STATUS_CODES = [
        self::OFFICIAL,
        self::PROMOTION,
        self::BOOTLEG,
        self::PSEUDO_RELEASE
    ];

    /**
     * The release status code
     *
     * @var string
     */
    private $statusCode;

    /**
     * Music Brainz Identifier (MBID) of the status code
     *
     * @var MBID
     */
    private $statusId;

    /**
     * Constructs a release status.
     *
     * @param null|string $statusCode A release status code
     * @param null|MBID   $statusId   Music Brainz Identifier (MBID) of the status code
     */
    public function __construct(?string $statusCode = self::UNDEFINED, ?MBID $statusId = null)
    {
        $this->statusCode = (in_array($statusCode, self::STATUS_CODES))
            ? $statusCode
            : self::UNDEFINED;

        $this->statusId = $statusId ?: new MBID;
    }

    /**
     * Returns the status code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->statusCode;
    }
}
