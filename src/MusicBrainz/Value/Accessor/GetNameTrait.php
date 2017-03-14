<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Name;

/**
 * Provides a getter for a name.
 */
trait GetNameTrait
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
