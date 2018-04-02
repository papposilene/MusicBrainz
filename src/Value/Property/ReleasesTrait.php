<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\ReleaseList;

/**
 * Provides a getter for a list of releases.
 */
trait ReleasesTrait
{
    /**
     * A list of releases
     *
     * @var ReleaseList
     */
    private $releases;

    /**
     * Returns a list of releases.
     *
     * @return ReleaseList
     */
    public function getReleases(): ReleaseList
    {
        return $this->releases;
    }

    /**
     * Sets the releases by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setReleasesFromArray(array $input): void
    {
        $this->releases = is_null($rating = ArrayAccess::getArray($input, 'releases'))
            ? new ReleaseList
            : new ReleaseList($rating);
    }
}
