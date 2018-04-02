<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the name by extracting it from a given input array.
     *
     * @param array  $input An array returned by the webservice
     * @param string $key   An array key. Default: 'name'
     *
     * @return void
     */
    private function setNameFromArray(array $input, string $key = 'name'): void
    {
        $this->name = is_null($name = ArrayAccess::getString($input, $key))
            ? new Name
            : new Name($name);
    }
}
