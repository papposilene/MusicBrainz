<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Gender;

/**
 * Provides accessors for the gender.
 */
trait GenderAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the gender.
     *
     * @return null|Gender
     */
    public function getGender(): ?Gender
    {
        return $this->getFilterValue('gender');
    }

    /**
     * Sets the gender.
     *
     * @param null|Gender $gender
     *
     * @return self
     */
    public function setGender(?Gender $gender): self
    {
        return $this->setFilterValue('gender', $gender);
    }
}
