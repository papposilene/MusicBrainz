<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Address;

/**
 * Provides a getter for the address.
 */
trait AddressTrait
{
    /**
     * The address
     *
     * @var Address
     */
    private $address;

    /**
     * Returns the address.
     *
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * Sets the address by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setAddressFromArray(array $input): void
    {
        $this->address = is_null($address = ArrayAccess::getString($input, 'address'))
            ? new Address
            : new Address($address);
    }
}
