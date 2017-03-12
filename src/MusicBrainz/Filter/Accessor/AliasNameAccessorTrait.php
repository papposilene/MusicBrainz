<?php

namespace MusicBrainz\Filter\Accessor;

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
     * @return self
     */
    public function setAliasName(?string $aliasName): self
    {
        return $this->setFilterValue('alias', $aliasName);
    }
}
