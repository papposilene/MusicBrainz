<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Phrase;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\Name;

trait ArtistNameTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the artist name.
     *
     * @return string
     */
    public static function artistName(): string
    {
        return 'artist';
    }

    /**
     * Adds an artist name, as it appears on the recording.
     *
     * @param Name $artistName An artist name, as it appears on the recording
     *
     * @return Phrase
     */
    public function addArtistName(Name $artistName): Phrase
    {
        return $this->addPhrase($artistName, self::artistName());
    }
}