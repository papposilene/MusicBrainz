<?php

namespace MusicBrainz\Helper;

use MusicBrainz\Definition\RelationTarget;
use MusicBrainz\Definition\RelationTypeId;
use MusicBrainz\Relation;
use MusicBrainz\Relation\Type;
use MusicBrainz\Value\Direction;
use MusicBrainz\Value\MBID;

/**
 * The relation factory
 */
class RelationFactory
{
    use \MusicBrainz\Value\Property\AreaTrait;

    /**
     * Makes and returns a relation by given information from the webservice.
     *
     * @param array $relation Information about the relation
     *
     * @return Relation
     */
    public static function make(array $relation = []): Relation
    {
        $relationTypeId = ArrayAccess::getString($relation, 'type-id');

        /** @var Type $relationType */
        $relationType = self::getRelationType(new MBID($relationTypeId));
        $direction    = new Direction(ArrayAccess::getString($relation, 'direction'));

        $relatedEntityType = (Direction::FORWARD == $direction)
            ? $relationType::getRelatedEntityType()
            : $relationType::getBaseEntityType();

        $class = RelationTarget::getClassMap()[(string) $relatedEntityType];

        return new $class(
            $relation[(string) $relatedEntityType],
            $relationType,
            $direction
        );
    }

    private static function getRelationClasses(): array
    {
        return [
            \MusicBrainz\Relation\Target\AreaRelation::class,
            \MusicBrainz\Relation\Target\ArtistRelation::class,
            \MusicBrainz\Relation\Target\EventRelation::class,
            \MusicBrainz\Relation\Target\InstrumentRelation::class,
            \MusicBrainz\Relation\Target\LabelRelation::class,
            \MusicBrainz\Relation\Target\PlaceRelation::class,
            \MusicBrainz\Relation\Target\RecordingRelation::class,
            \MusicBrainz\Relation\Target\ReleaseRelation::class,
            \MusicBrainz\Relation\Target\ReleaseGroupRelation::class,
            \MusicBrainz\Relation\Target\SeriesRelation::class,
            \MusicBrainz\Relation\Target\UrlRelation::class,
            \MusicBrainz\Relation\Target\WorkRelation::class
        ];
    }

    /**
     * Returns a relation type by its MusicBrainz Identifier (MBID).
     *
     * @param MBID $relationTypeId The MusicBrainz Identifier (MBID) of the relation type.
     *
     * @return Type
     */
    private static function getRelationType(MBID $relationTypeId): Type
    {
        $classMap = RelationTypeId::getClassMap();

        if (array_key_exists((string) $relationTypeId, $classMap)) {
            $relationType = RelationTypeId::getClassMap()[(string) $relationTypeId];

            return new $relationType;
        }
    }
}
