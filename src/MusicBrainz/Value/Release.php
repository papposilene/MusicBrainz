<?php

namespace MusicBrainz\Value;

/**
 * A release
 */
class Release
{
    use Property\AliasesTrait;
    use Property\AnnotationTrait;
    use Property\ArtistCreditsTrait;
    use Property\ASINTrait;
    use Property\BarcodeTrait;
    use Property\CountryTrait;
    use Property\DateTrait;
    use Property\DisambiguationTrait;
    use Property\MBIDTrait;
    use Property\MediaTrait;
    use Property\PackagingTrait;
    use Property\DataQualityTrait;
    use Property\ReleaseStatusTrait;
    use Property\TextRepresentationTrait;
    use Property\TitleTrait;

    /**
     * Constructs a recording.
     *
     * @param array $release Array of information about a release
     */
    public function __construct(array $release = [])
    {
        $this->aliases            = new AliasList(isset($release['aliases']) ? $release['aliases'] : []);
        $this->annotation         = new Annotation(isset($release['annotation']) ? $release['annotation'] : []);
        $this->artistCredits      = new ArtistCreditList(isset($release['artistCredits']) ? (string) $release['artistCredits'] : []);
        $this->asin               = new ASIN(isset($release['asin']) ? (string) $release['asin'] : '');
        $this->barcode            = new Barcode(isset($release['barcode']) ? (string) $release['barcode'] : '');
        $this->country            = new Country(isset($release['country']) ? (string) $release['country'] : '');
        $this->date               = new Date(isset($release['date']) ? (string) $release['date'] : '');
        $this->disambiguation     = new Disambiguation(isset($release['disambiguation']) ? (string) $release['disambiguation'] : '');
        $this->MBID               = new MBID(isset($release['id']) ? (string) $release['id'] : '');
        $this->media              = new MediaList(isset($release['media']) ? $release['media'] : []);
        $this->packaging          = new Packaging(isset($release['packaging']) ? $release['packaging'] : '');
        $this->quality            = new DataQuality(isset($release['quality']) ? $release['quality'] : '');
        $this->releaseStatus      = new ReleaseStatus(isset($release['status']) ? $release['status'] : '');
        $this->textRepresentation = new TextRepresentation(isset($release['text-representation']) ? $release['text-representation'] : []);
        $this->title              = new Title(isset($release['title']) ? $release['title'] : '');
    }
}
