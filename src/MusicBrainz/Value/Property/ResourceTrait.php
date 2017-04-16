<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Resource;

/**
 * Provides a getter for the resource.
 */
trait ResourceTrait
{
    /**
     * The resource
     *
     * @var Resource
     */
    private $resource;

    /**
     * Returns the resource.
     *
     * @return Resource
     */
    public function getResource(): Resource
    {
        return $this->resource;
    }
}
