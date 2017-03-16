<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the alias name.
 */
trait AliasNameAccessorTrait
{
    /**
     * An alias name
     *
     * @var Name
     */
    private $aliasName;

    /**
     * Returns the alias name.
     *
     * @return Name
     */
    public function getAliasName(): Name
    {
        return $this->aliasName;
    }

    /**
     * Sets the alias name.
     *
     * @param Name $aliasName The alias name
     *
     * @return self
     */
    public function setAliasName(Name $aliasName): self
    {
        $this->aliasName = $aliasName;

        return $this;
    }
}
