<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Expression\Clause\Term;
use MusicBrainz\Value\Gender;

trait GenderTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the gender.
     *
     * @return string
     */
    public static function gender(): string
    {
        return 'gender';
    }

    /**
     * Adds a gender.
     *
     * @param Gender $gender A gender
     *
     * @return Term
     */
    public function addGender(Gender $gender): Term
    {
        return $this->addTerm($gender, self::gender());
    }
}