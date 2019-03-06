<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Expression\Clause\Phrase;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\Name;

trait CreditNameTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the credit name.
     *
     * @return string
     */
    public static function creditName(): string
    {
        return 'creditname';
    }

    /**
     * Adds a name credit.
     *
     * @param Name $creditName A name credit
     *
     * @return Phrase
     */
    public function addCreditName(Name $creditName): Phrase
    {
        return $this->addPhrase($creditName, self::creditName());
    }
}