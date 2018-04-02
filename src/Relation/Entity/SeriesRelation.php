<?php
namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;

/**
 * A relation between a series and another entity.
 */
class SeriesRelation extends AbstractRelation
{
    use \MusicBrainz\Relation\RelatedEntity\CollectionTrait;
}
