<?php

namespace MusicBrainz;

/**
 * An artist type
 *
 * @see https://musicbrainz.org/doc/Artist
 */
class ArtistType
{
    /**
     * This indicates an individual person.
     *
     * @var string
     */
    public const PERSON = 'Person';

    /**
     * This indicates a group of people that may or may not have a distinctive name.
     *
     * @var string
     */
    public const GROUP = 'Group';

    /**
     * This indicates an orchestra (a large instrumental ensemble).
     *
     * @var string
     */
    public const ORCHESTRA = 'Orchestra';

    /**
     * This indicates a choir/chorus (a large vocal ensemble).
     *
     * @var string
     */
    public const CHOIR = 'Choir';

    /**
     * This indicates an individual fictional character.
     *
     * @var string
     */
    public const CHARACTER = 'Character';

    /**
     * This indicates an undefined type of character.
     *
     * @var string
     */
    public const OTHER = 'Other';

    /**
     * A list of valid artist type codes
     *
     * @var array
     */
    private const TYPES = [
        self::PERSON,
        self::GROUP,
        self::ORCHESTRA,
        self::CHOIR,
        self::CHARACTER,
        self::OTHER
        ];

    /**
     * The artist type code
     *
     * @var string
     */
    private $type;

    /**
     * Constructs an artist type.
     *
     * @param string $type An artist type code
     */
    public function __construct(string $type)
    {
        $this->type = (in_array($type, self::TYPES))
            ? $type
            : self::OTHER;
    }

    /**
     * Returns the artist type code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->type;
    }
}
