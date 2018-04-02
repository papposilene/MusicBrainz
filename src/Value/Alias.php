<?php
namespace MusicBrainz\Value;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value;

/**
 * Aliases are variant names that are mostly used as search help: if a search matches an entity's alias, the entity will
 * be given as a result - even if the actual name wouldn't be.
 *
 * @see https://musicbrainz.org/doc/Aliases
 */
class Alias implements Value
{
    use Property\AliasTypeTrait;
    use Property\BeginDateTrait;
    use Property\EndDateTrait;
    use Property\LocaleCodeTrait;
    use Property\NameTrait;
    use Property\PrimaryNameTrait;
    use Property\SortNameTrait;

    /**
     * Constructs an alias.
     *
     * @param array $alias An array with information about the alias
     */
    public function __construct(array $alias = [])
    {
        $this->setAliasTypeFromArray($alias);
        $this->setBeginDateFromArray($alias);
        $this->setEndDateFromArray($alias);
        $this->setLocaleCodeFromArray($alias);
        $this->setPrimaryNameFromArray($alias);
        $this->setSortNameFromArray($alias);
    }

    /**
     * Returns the alternative name.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getName();
    }
}
