<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToReleaseGroupList;

/**
 * Provides a getter for the list of relations to a release group.
 */
trait ReleaseGroupRelationsTrait
{
    /**
     * A list of relations to a release group
     *
     * @var RelationToReleaseGroupList
     */
    private $releaseGroupRelations;

    /**
     * Returns a list of relations to a release group.
     *
     * @return RelationToReleaseGroupList
     */
    public function getReleaseRelations(): RelationToReleaseGroupList
    {
        return $this->releaseGroupRelations;
    }

    /**
     * Sets a list of relations to a release group by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setReleaseRelationsFromArray(array $input): void
    {
        $this->releaseGroupRelations = is_null($input = ArrayAccess::getArray($input, EntityType::RELEASE_GROUP))
            ? new RelationToReleaseGroupList
            : new RelationToReleaseGroupList($input);
    }
}
