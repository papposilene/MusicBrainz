<?php

namespace MusicBrainz\Filter\Accessor;
use MusicBrainz\Filter\Filter;

/**
 * Provides accessors for the alias name
 */
trait AliasNameAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the alias.
     *
     * @return null|string
     */
    public function getAliasName(): ?string
    {
        return $this->getFilterValue('alias');
    }

    /**
     * Sets an alias.
     *
     * @param null|string $aliasName An alias
     *
     * @return Filter
     */
    public function setAliasName(?string $aliasName): Filter
    {
        return $this->setFilterValue('alias', $aliasName);
    }
}
