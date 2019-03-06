<?php

namespace MusicBrainz\Supplement\Lookup;

class SeriesFields
{
    // relations
    use \MusicBrainz\Supplement\Field\ArtistRelationsTrait;
    use \MusicBrainz\Supplement\Field\EventRelationsTrait;
    use \MusicBrainz\Supplement\Field\LabelRelationsTrait;
    use \MusicBrainz\Supplement\Field\RecordingRelationsTrait;
    use \MusicBrainz\Supplement\Field\ReleaseRelationsTrait;
    use \MusicBrainz\Supplement\Field\ReleaseGroupRelationsTrait;
    use \MusicBrainz\Supplement\Field\SeriesRelationsTrait;
    use \MusicBrainz\Supplement\Field\URLRelationsTrait;
    use \MusicBrainz\Supplement\Field\WorkRelationsTrait;
}
