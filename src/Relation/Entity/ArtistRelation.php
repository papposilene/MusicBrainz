<?php
namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;

/**
 * A relation between an artist and another entity.
 */
class ArtistRelation extends AbstractRelation
{
    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\RecordingTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseTrait;
    use \MusicBrainz\Relation\RelatedEntity\ReleaseGroupTrait;
    use \MusicBrainz\Relation\RelatedEntity\WorkTrait;
}
