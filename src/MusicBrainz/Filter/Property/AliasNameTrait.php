<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the alias name.
 */
trait AliasNameTrait
{
    /**
     * An alias name
     *
     * @var null|Name
     */
    private $aliasName;

    /**
     * Returns the alias name.
     *
     * @return null|Name
     */
    public function getAliasName(): ?Name
    {
        return $this->aliasName;
    }

    /**
     * Sets the alias name.
     *
     * @param null|Name $aliasName The alias name
     *
     * @return self
     */
    public function setAliasName(?Name $aliasName): self
    {
        $this->aliasName = $aliasName;

        return $this;
    }
}
