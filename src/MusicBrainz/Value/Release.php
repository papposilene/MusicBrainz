<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A release
 */
class Release implements Value
{
    use Property\AliasesTrait;
    use Property\AnnotationTextTrait;
    use Property\ArtistCreditsTrait;
    use Property\ASINTrait;
    use Property\BarcodeTrait;
    use Property\CollectionsTrait;
    use Property\CountryTrait;
    use Property\DateTrait;
    use Property\DisambiguationTrait;
    use Property\MBIDTrait;
    use Property\MediaTrait;
    use Property\PackagingTrait;
    use Property\DataQualityTrait;
    use Property\ReleaseEventListTrait;
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
        $this->annotationText     = new AnnotationText(isset($release['annotation']) ? $release['annotation'] : '');
        $this->artistCredits      = new ArtistCreditList(isset($release['artistCredits']) ? (string) $release['artistCredits'] : []);
        $this->asin               = new ASIN(isset($release['asin']) ? (string) $release['asin'] : '');
        $this->barcode            = new Barcode(isset($release['barcode']) ? (string) $release['barcode'] : '');
        $this->collections        = new CollectionList(isset($release['collections']) ? $release['collections'] : []);
        $this->country            = new Country(isset($release['country']) ? (string) $release['country'] : '');
        $this->date               = new Date(isset($release['date']) ? (string) $release['date'] : '');
        $this->disambiguation     = new Disambiguation(isset($release['disambiguation']) ? (string) $release['disambiguation'] : '');
        $this->MBID               = new MBID(isset($release['id']) ? (string) $release['id'] : '');
        $this->media              = new MediaList(isset($release['media']) ? $release['media'] : []);
        $this->packaging          = new Packaging(isset($release['packaging']) ? $release['packaging'] : '');
        $this->quality            = new DataQuality(isset($release['quality']) ? $release['quality'] : '');
        $this->releaseEventList   = new ReleaseEventList(isset($release['release-events']) ? $release['release-events'] : []);
        $this->releaseStatus      = new ReleaseStatus(isset($release['status']) ? $release['status'] : '');
        $this->textRepresentation = new TextRepresentation(isset($release['text-representation']) ? $release['text-representation'] : []);
        $this->title              = new Title(isset($release['title']) ? $release['title'] : '');
    }

    /**
     * Returns the release as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getTitle();
    }
}
