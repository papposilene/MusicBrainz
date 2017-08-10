<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToReleaseList;

/**
 * Provides a getter for the list of relations to a release.
 */
trait ReleaseRelationsTrait
{
    /**
     * A list of relations to a release
     *
     * @var RelationToReleaseList
     */
    private $releaseRelations;

    /**
     * Returns a list of relations to a release.
     *
     * @return RelationToReleaseList
     */
    public function getReleaseRelations(): RelationToReleaseList
    {
        return $this->releaseRelations;
    }

    /**
     * Sets a list of relations to a release by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setReleaseRelationsFromArray(array $input): void
    {
        $this->releaseRelations = is_null($input = ArrayAccess::getArray($input, EntityType::RELEASE))
            ? new RelationToReleaseList
            : new RelationToReleaseList($input);
    }
}
