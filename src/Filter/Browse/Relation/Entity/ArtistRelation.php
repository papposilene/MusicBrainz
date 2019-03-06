<?php

namespace MusicBrainz\Filter\Browse\Relation\Entity;

use MusicBrainz\Filter\Browse\Relation\AbstractRelation;

/**
 * A relation between an artist and another entity.
 */
class ArtistRelation extends AbstractRelation
{
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\RecordingTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\ReleaseTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\ReleaseGroupTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\WorkTrait;
}
