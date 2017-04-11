<?php

namespace MusicBrainz\Value;

/**
 * A release status
 */
class ReleaseStatus
{
    /**
     * Official
     *
     * @var string
     */
    public const OFFICIAL = 'official';

    /**
     * Promotional release
     *
     * @var string
     */
    public const PROMOTION = 'promotion';

    /**
     * A bootleg
     *
     * @var string
     */
    public const BOOTLEG = 'bootleg';

    /**
     * A pseude release
     *
     * @var string
     */
    public const PSEUDO_RELEASE = 'pseudo-release';

    /**
     * An undefined release status
     *
     * @var string
     */
    public const UNDEFINED = 'undefined';

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
     * Constructs a release status.
     *
     * @param null|string $statusCode A release status code
     */
    public function __construct(?string $statusCode = self::UNDEFINED)
    {
        $this->statusCode = (in_array($statusCode, self::STATUS_CODES))
            ? $statusCode
            : self::UNDEFINED;
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
