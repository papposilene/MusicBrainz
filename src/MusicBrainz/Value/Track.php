<?php

namespace MusicBrainz\Value;

/**
 * A track
 */
class Track
{
    use Property\MBIDTrait;
    use Property\TitleTrait;
    use Property\LengthTrait;
    use Property\ArtistCreditsTrait;
    use Property\TrackNumberTrait;

    /**
     * Constructs a track.
     *
     * @param array $track Information about the track
     */
    public function __construct(array $track = [])
    {
        $this->MBID          = new MBID(isset($track['id']) ? $track['id'] : '');
        $this->title         = new Title(isset($track['title']) ? $track['title'] : '');
        $this->length        = new Length(isset($track['length']) ? (int) $track['length'] : 0);
        $this->artistCredits = new ArtistCreditList(isset($track['artist-credit']) ? $track['artist-credit'] : []);
        $this->trackNumber   = new TrackNumber(isset($track['number']) ? $track['number'] : null);
    }

    /**
     * Returns the rating as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getRatingValue();
    }
}
