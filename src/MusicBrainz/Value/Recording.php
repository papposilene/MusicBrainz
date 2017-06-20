<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A recording
 * A recording is an entity in MusicBrainz which can be linked to tracks on releases. Each track must always be
 * associated with a single recording, but a recording can be linked to any number of tracks.
 * A recording represents distinct audio that has been used to produce at least one released track through copying or
 * mastering. A recording itself is never produced solely through copying or mastering.
 * Generally, the audio represented by a recording corresponds to the audio at a stage in the production process before
 * any final mastering but after any editing or mixing.
 *
 * @link https://musicbrainz.org/doc/Recording
 */
class Recording implements Value
{
    use Property\MBIDTrait;
    use Property\LengthTrait;
    use Property\TitleTrait;
    use Property\AliasesTrait;
    use Property\IpisTrait;
    use Property\CountryTrait;
    use Property\LabelCodeTrait;
    use Property\LabelTypeTrait;
    use Property\AreaTrait;
    use Property\LifeSpanTrait;
    use Property\SortNameTrait;
    use Property\IsnisTrait;
    use Property\DisambiguationTrait;
    use Property\RatingTrait;
    use Property\ReleasesTrait;
    use Property\TagsTrait;
    use Property\ArtistCreditsTrait;
    use Property\VideoFlagTrait;
    use Property\ScoreTrait;

    /**
     * Constructs a recording.
     *
     * @param array $recording Array of information about a label
     */
    public function __construct(array $recording = [])
    {
        $this->MBID           = new MBID(isset($recording['id']) ? (string) $recording['id'] : '');
        $this->length         = new Length(isset($recording['length']) ? (string) $recording['length'] : '');
        $this->title          = new Title(isset($recording['title']) ? (string) $recording['title'] : '');
        $this->aliases        = new AliasList(isset($recording['aliases']) ? $recording['aliases'] : []);
        $this->ipis           = new IPIList(isset($recording['ipis']) ? $recording['ipis'] : []);
        $this->country        = new Country(isset($recording['country']) ? (string) $recording['country'] : '');
        $this->labelCode      = new LabelCode(isset($recording['label-code']) ? (string) $recording['label-code'] : '');
        $this->labelType      = new LabelType(isset($recording['type']) ? (string) $recording['type'] : '');
        $this->area           = new Area(isset($recording['area']) ? $recording['area'] : []);
        $this->lifeSpan       = new LifeSpan(isset($recording['life-span']) ? $recording['life-span'] : []);
        $this->sortName       = new SortName(isset($recording['sort-name']) ? (string)$recording['sort-name'] : '');
        $this->disambiguation = new Disambiguation(isset($recording['disambiguation']) ? (string)$recording['disambiguation'] : '');
        $this->rating         = new Rating(isset($recording['rating']) ? $recording['rating'] : []);
        $this->releases       = new ReleaseList(isset($recording['releases']) ? $recording['releases'] : []);
        $this->tags           = new TagList(isset($recording['tags']) ? $recording['tags'] : []);
        $this->artistCredits  = new ArtistCreditList(isset($recording['artist-credit']) ? $recording['artist-credit'] : []);
        $this->videoFlag      = new VideoFlag(isset($recording['video']) && true === (bool) $recording['video']);
        $this->score          = isset($recording['score']) ? (int)$recording['score'] : 0;
    }

    /**
     * Returns the recording as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getTitle();
    }
}
