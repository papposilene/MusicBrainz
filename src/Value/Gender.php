<?php
namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A gender
 */
class Gender implements Value
{
    /**
     * Male
     *
     * @var string
     */
    public const MALE = 'male';

    /**
     * Female
     *
     * @var string
     */
    public const FEMALE = 'female';

    /**
     * Neither male nor female
     *
     * @var string
     */
    public const OTHER = 'other';

    /**
     * Undefined gender
     *
     * @var string
     */
    public const UNDEFINED = '';

    /**
     * A list of valid gender codes
     *
     * @var array
     */
    public const GENDERS = [
        self::MALE,
        self::FEMALE,
        self::OTHER,
        self::UNDEFINED
    ];

    /**
     * The gender code
     *
     * @var string
     */
    private $genderCode;

    /**
     * Constructs a gender.
     *
     * @param string $genderCode The gender
     */
    public function __construct(string $genderCode = self::UNDEFINED)
    {
        $this->genderCode = (in_array($genderCode, self::GENDERS))
            ? $genderCode
            : self::UNDEFINED;
    }

    /**
     * Returns the gender code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (self::UNDEFINED === $this->genderCode)
            ? $this->genderCode
            : '';
    }
}
