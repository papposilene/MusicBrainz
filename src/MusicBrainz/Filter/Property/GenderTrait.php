<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Gender;

/**
 * Provides accessors for the gender.
 */
trait GenderTrait
{
    /**
     * The gender
     *
     * @var null|Gender
     */
    private $gender;

    /**
     * Returns the gender.
     *
     * @return null|Gender
     */
    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    /**
     * Sets the gender.
     *
     * @param null|Gender $gender The gender
     *
     * @return self
     */
    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
