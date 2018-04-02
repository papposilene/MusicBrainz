<?php
namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;

/**
 * A relation between an event and another entity.
 */
class EventRelation extends AbstractRelation
{
    use \MusicBrainz\Relation\RelatedEntity\AreaTrait;
    use \MusicBrainz\Relation\RelatedEntity\ArtistTrait;
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
    use \MusicBrainz\Relation\RelatedEntity\PlaceTrait;
}
