<?php

namespace MusicBrainz\Definition;

use MusicBrainz\Relation\Target\AreaRelation;
use MusicBrainz\Relation\Target\ArtistRelation;
use MusicBrainz\Relation\Target\EventRelation;
use MusicBrainz\Relation\Target\InstrumentRelation;
use MusicBrainz\Relation\Target\LabelRelation;
use MusicBrainz\Relation\Target\PlaceRelation;
use MusicBrainz\Relation\Target\RecordingRelation;
use MusicBrainz\Relation\Target\ReleaseGroupRelation;
use MusicBrainz\Relation\Target\ReleaseRelation;
use MusicBrainz\Relation\Target\SeriesRelation;
use MusicBrainz\Relation\Target\UrlRelation;
use MusicBrainz\Relation\Target\WorkRelation;
use MusicBrainz\Value\EntityType;

class RelationTarget
{
    /**
     * Returns a list of relation classes associated their target's entity type.
     *
     * @return array
     */
    public static function getClassMap(): array
    {
        return [
            EntityType::AREA          => AreaRelation::class,
            EntityType::ARTIST        => ArtistRelation::class,
            EntityType::EVENT         => EventRelation::class,
            EntityType::INSTRUMENT    => InstrumentRelation::class,
            EntityType::LABEL         => LabelRelation::class,
            EntityType::PLACE         => PlaceRelation::class,
            EntityType::RECORDING     => RecordingRelation::class,
            EntityType::RELEASE       => ReleaseRelation::class,
            EntityType::RELEASE_GROUP => ReleaseGroupRelation::class,
            EntityType::SERIES        => SeriesRelation::class,
            EntityType::URL           => UrlRelation::class,
            EntityType::WORK          => WorkRelation::class
        ];
    }
}
