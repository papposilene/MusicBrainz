<?php
namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * An artist type
 *
 * @see https://musicbrainz.org/doc/Artist
 */
class ArtistType implements Value
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
     * Anything which does not fit into the above categories.
     *
     * @var string
     */
    public const OTHER = 'Other';

    /**
     * This indicates an undefined type of character.
     *
     * @var string
     */
    public const UNDEFINED = 'Undefined';

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
        self::OTHER,
        self::UNDEFINED
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
    public function __construct(string $type = self::UNDEFINED)
    {
        $this->type = (in_array($type, self::TYPES))
            ? $type
            : self::UNDEFINED;
    }

    /**
     * Returns the artist type code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (self::UNDEFINED === $this->type)
            ? ''
            : $this->type;
    }
}
