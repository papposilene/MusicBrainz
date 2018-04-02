<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Artist;

/**
 * Provides a getter for the artist.
 */
trait ArtistTrait
{
    /**
     * The artist
     *
     * @var Artist
     */
    private $artist;

    /**
     * Returns the artist.
     *
     * @return Artist
     */
    public function getArtist(): Artist
    {
        return $this->artist;
    }

    /**
     * Sets the artist by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setArtist(array $input): void
    {
        $this->name = is_null($artist = ArrayAccess::getArray($input, 'artist'))
            ? new Artist
            : new Artist($artist);
    }
}
