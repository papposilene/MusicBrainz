<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToAreaList;

/**
 * Provides a getter for the list of relations to an area.
 */
trait AreaRelationsTrait
{
    /**
     * A list of relations to an area
     *
     * @var RelationToAreaList
     */
    private $areaRelations;

    /**
     * Returns a list of relations to an area.
     *
     * @return RelationToAreaList
     */
    public function getAreaRelations(): RelationToAreaList
    {
        return $this->areaRelations;
    }

    /**
     * Sets a list of relations to an area by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setAreaRelationsFromArray(array $input): void
    {
        $this->areaRelations = is_null($input = ArrayAccess::getArray($input, EntityType::AREA))
            ? new RelationToAreaList
            : new RelationToAreaList($input);
    }
}
