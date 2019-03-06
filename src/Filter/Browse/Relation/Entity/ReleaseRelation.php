<?php

namespace MusicBrainz\Filter\Browse\Relation\Entity;

use MusicBrainz\Filter\Browse\Relation\AbstractRelation;

/**
 * A relation between a release and another entity.
 */
class ReleaseRelation extends AbstractRelation
{
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\LabelTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\TrackTrait;
    // track artist?
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\RecordingTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\ReleaseGroupTrait;
}
