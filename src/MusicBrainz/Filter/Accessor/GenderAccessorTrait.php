<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Gender;

/**
 * Provides accessors for the gender.
 */
trait GenderAccessorTrait
{
    /**
     * The gender
     *
     * @var Gender
     */
    private $gender;

    /**
     * Returns the gender.
     *
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }

    /**
     * Sets the gender.
     *
     * @param Gender $gender The gender
     *
     * @return self
     */
    public function setGender(Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
