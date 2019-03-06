<?php

namespace MusicBrainz\Filter\Browse\Relation\Entity;

use MusicBrainz\Filter\Browse\Relation\AbstractRelation;

/**
 * A relation between a recording and another entity.
 */
class RecordingRelation extends AbstractRelation
{
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Filter\Browse\Relation\RelatedEntity\ReleaseTrait;
}
