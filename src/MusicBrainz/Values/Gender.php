<?php

namespace MusicBrainz;

/**
 * A gender
 */
class Gender
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
     * A list of valid gender codes
     *
     * @var array
     */
    public const GENDERS = [
        self::MALE,
        self::FEMALE,
        self::OTHER
    ];

    /**
     * The gender code
     *
     * @var string
     */
    private $gender;

    /**
     * Constructs a gender.
     *
     * @param string $gender The gender
     */
    public function __construct(string $gender)
    {
        $this->gender = (in_array($gender, self::GENDERS))
            ? $gender
            : self::OTHER;
    }

    /**
     * Returns the gender code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->gender;
    }
}
