<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Term;
use MusicBrainz\Value\Name;

trait AliasNameTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the alias name.
     *
     * @return string
     */
    public static function alias(): string
    {
        return 'alias';
    }

    /**
     * Adds an alias.
     *
     * @param Name $aliasName An alias name
     *
     * @return Term
     */
    public function addAlias(Name $aliasName): Term
    {
        return $this->addTerm($aliasName, self::alias());
    }
}