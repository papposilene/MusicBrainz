<?php

namespace MusicBrainz\Value;

/**
 * A release
 */
class Release
{
    use Property\MBIDTrait;
    use Property\DateTrait;
    use Property\ArtistCreditsTrait;
    use Property\BarcodeTrait;
    use Property\DisambiguationTrait;
    use Property\MediaTrait;
    use Property\PackagingTrait;

    /**
     * Constructs a recording.
     *
     * @param array $release Array of information about a release
     */
    public function __construct(array $release = [])
    {
        $this->MBID           = new MBID(isset($release['id']) ? (string) $release['id'] : '');
        $this->date           = new Date(isset($release['date']) ? (string) $release['date'] : '');
        $this->artistCredits  = new ArtistCreditList(isset($release['artistCredits']) ? (string) $release['artistCredits'] : []);
        $this->barcode        = new Barcode(isset($release['barcode']) ? (string) $release['barcode'] : '');
        $this->disambiguation = new Disambiguation(isset($release['disambiguation']) ? (string) $release['disambiguation'] : '');
        $this->media          = new MediaList(isset($release['media']) ? $release['media'] : []);
        $this->packaging      = new Packaging(isset($release['packaging']) ? $release['packaging'] : '');
    }
}
