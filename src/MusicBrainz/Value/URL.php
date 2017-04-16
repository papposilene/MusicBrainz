<?php

namespace MusicBrainz\Value;

/**
 * An URL
 * A URL in MusicBrainz is a specific entity representing a regular internet Uniform Resource Locator. A MusicBrainz URL
 * entity can be edited to change the underlying internet URL it points to; and can be linked to Artists, Releases,
 * Tracks and Labels.
 *
 * @link https://musicbrainz.org/doc/URL
 */
class URL
{
    use Property\MBIDTrait;
    use Property\ResourceTrait;

    /**
     * Constructs an URL.
     *
     * @param array $resource Information about the track
     */
    public function __construct(array $resource = [])
    {
        $this->MBID     = new MBID(isset($resource['id']) ? $resource['id'] : '');
        $this->resource = new Resource(isset($resource['resource']) ? $resource['resource'] : []);
    }

    /**
     * Returns the URL resource as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getResource();
    }
}
