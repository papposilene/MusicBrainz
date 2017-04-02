<?php

namespace MusicBrainz\Value;

/**
 * Aliases are variant names that are mostly used as search help: if a search matches an entity's alias, the entity will
 * be given as a result - even if the actual name wouldn't be.
 *
 * @see https://musicbrainz.org/doc/Aliases
 */
class Alias
{
    use Property\SortNameTrait;
    use Property\NameTrait;
    use Property\LocaleCodeTrait;
    use Property\AliasTypeTrait;
    use Property\PrimaryNameTrait;
    use Property\BeginDateTrait;
    use Property\EndDateTrait;

    /**
     * Constructs an alias.
     *
     * @param array $alias An array with information about the alias
     */
    public function __construct(array $alias = [])
    {
        $this->sortName    = new SortName(isset($alias['sort-name']) ? (string) $alias['sort-name'] : '');
        $this->name        = new Name(isset($alias['name']) ? (string) $alias['name'] : '');
        $this->localeCode  = new LocaleCode(isset($alias['locale']) ? (string) $alias['locale'] : '');
        $this->aliasType   = new AliasType(isset($alias['type']) ? (string) $alias['type'] : '');
        $this->primaryName = isset($alias['primary']) && true == $alias['primary'];
        $this->beginDate   = new Date(isset($alias['begin']) ? (string) $alias['begin'] : '');
        $this->endDate     = new Date(isset($alias['ended']) ? (string) $alias['ended'] : '');
    }

    /**
     * Returns the alternative name.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getName();
    }
}
