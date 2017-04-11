<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;

class Release extends AbstractRelation
{
    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\LabelTrait;
    use \MusicBrainz\Relation\RelatedEntity\TrackTrait;
    // track artist?
    use \MusicBrainz\Relation\RelatedEntity\RecordingTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseGroupTrait;
}
