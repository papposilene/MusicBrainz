<?php

namespace MusicBrainz\Supplement\Lookup;

class ReleaseFields
{
    use \MusicBrainz\Supplement\Field\ArtistsTrait;
    use \MusicBrainz\Supplement\Field\CollectionsTrait;
    use \MusicBrainz\Supplement\Field\LabelsTrait;
    use \MusicBrainz\Supplement\Field\RecordingsTrait;
    use \MusicBrainz\Supplement\Field\ReleasesTrait;

    use \MusicBrainz\Supplement\Field\MediaTrait;
    use \MusicBrainz\Supplement\Field\ArtistCreditsTrait;
    use \MusicBrainz\Supplement\Field\DiscIdsTrait;
    use \MusicBrainz\Supplement\Field\AnnotationTrait;
    use \MusicBrainz\Supplement\Field\AliasesTrait;
    // relations
    use \MusicBrainz\Supplement\Field\AreaRelationsTrait;
    use \MusicBrainz\Supplement\Field\ArtistRelationsTrait;
    use \MusicBrainz\Supplement\Field\EventRelationsTrait;
    use \MusicBrainz\Supplement\Field\LabelRelationsTrait;
    use \MusicBrainz\Supplement\Field\RecordingRelationsTrait;
    use \MusicBrainz\Supplement\Field\ReleaseRelationsTrait;
    use \MusicBrainz\Supplement\Field\SeriesRelationsTrait;
    use \MusicBrainz\Supplement\Field\URLRelationsTrait;

    use \MusicBrainz\Supplement\Field\RecordingLevelRelationsTrait;
    use \MusicBrainz\Supplement\Field\WorkLevelRelationsTrait;
}
