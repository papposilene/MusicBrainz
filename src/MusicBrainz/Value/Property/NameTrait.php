<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Name;

/**
 * Provides a getter for a name.
 */
trait NameTrait
{
    /**
     * The name
     *
     * @var Name
     */
    public $name;

    /**
     * Returns the name.
     *
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }

}
