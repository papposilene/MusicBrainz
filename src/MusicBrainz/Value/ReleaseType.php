<?php

namespace MusicBrainz\Value;

/**
 * A release type
 */
class ReleaseType
{
    /**
     * An album
     *
     * @var string
     */
    public const ALBUM = 'album';

    /**
     * An audiobook
     *
     * @var string
     */
    public const AUDIOBOOK = 'audiobook';

    /**
     * A compilation
     *
     * @var string
     */
    public const COMPILATION = 'compilation';

    /**
     * An EP
     *
     * @var string
     */
    public const EP = 'ep';

    /**
     * An interview
     *
     * @var string
     */
    public const INTERVIEW = 'interview';

    /**
     * A live recording
     *
     * @var string
     */
    public const LIVE = 'live';

    /**
     * ?
     *
     * @var string
     */
    public const NAT = 'nat';

    /**
     * Remixes
     *
     * @var string
     */
    public const REMIX = 'remix';

    /**
     * A single
     *
     * @var string
     */
    public const SINGLE = 'single';

    /**
     * A soundtrack
     *
     * @var string
     */
    public const SOUNDTRACK = 'soundtrack';

    /**
     * Spoken words
     *
     * @var string
     */
    public const SPOKENWORD = 'spokenword';

    /**
     * Another type
     *
     * @var string
     */
    public const OTHER = 'other';

    /**
     * A list of valid type codes
     *
     * @var array
     */
    public const TYPE_CODES = [
        self::ALBUM,
        self::AUDIOBOOK,
        self::COMPILATION,
        self::EP,
        self::INTERVIEW,
        self::LIVE,
        self::NAT,
        self::REMIX,
        self::SINGLE,
        self::SOUNDTRACK,
        self::SPOKENWORD
    ];

    /**
     * The release type code
     *
     * @var string
     */
    private $typeCode;

    /**
     * Constructs a release type.
     *
     * @param null|string $typeCode A release type code
     */
    public function __construct(?string $typeCode = self::OTHER)
    {
        $this->typeCode = (in_array($typeCode, self::TYPE_CODES))
            ? $typeCode
            : self::OTHER;
    }

    /**
     * Returns the type code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->typeCode;
    }
}
