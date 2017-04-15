<?php

namespace MusicBrainz\Supplement\Field;

trait UserCollectionsTrait
{
    /**
     * True, if user collections should be included, otherwise false
     *
     * @var bool
     */
    private $userCollections = false;

    /**
     * Returns true, if user collections should be included, otherwise false.
     *
     * @return bool
     */
    public function isUserCollections(): bool
    {
        return $this->userCollections;
    }

    /**
     * Sets whether user collections should be included.
     *
     * @param bool $userCollections True, if user collections should be included, otherwise false
     *
     * @return self
     */
    public function setUserCollections(bool $userCollections = true): self
    {
        $this->userCollections = $userCollections;

        return $this;
    }
}
