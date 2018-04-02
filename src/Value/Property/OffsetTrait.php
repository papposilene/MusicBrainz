<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Count;

/**
 * Provides a getter for the offset.
 */
trait OffsetTrait
{
    /**
     * The offset
     *
     * @var Count
     */
    private $offset;

    /**
     * Returns the offset.
     *
     * @return Count
     */
    public function getOffset(): Count
    {
        return $this->offset;
    }

    /**
     * Sets the offset by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setOffsetFromArray(array $input): void
    {
        $this->offset = is_null($count = ArrayAccess::getInteger($input, 'offset'))
            ? new Count
            : new Count($count);
    }
}
