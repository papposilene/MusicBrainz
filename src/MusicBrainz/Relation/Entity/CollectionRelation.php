<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;

/**
 * A relation between a collection and another entity.
 */
class CollectionRelation extends AbstractRelation
{
    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Relation\RelatedEntity\EditorTrait;
    use \MusicBrainz\Relation\RelatedEntity\EventTrait;
    use \MusicBrainz\Relation\RelatedEntity\LabelTrait;
    use \MusicBrainz\Relation\RelatedEntity\PlaceTrait;
    use \MusicBrainz\Relation\RelatedEntity\RecordingTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseGroupTrait;
    use \MusicBrainz\Relation\RelatedEntity\WorkTrait;
}
