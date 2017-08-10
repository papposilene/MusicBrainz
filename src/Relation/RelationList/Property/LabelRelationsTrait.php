<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToLabelList;

/**
 * Provides a getter for the list of relations to a label.
 */
trait LabelRelationsTrait
{
    /**
     * A list of relations to a label
     *
     * @var RelationToLabelList
     */
    private $labelRelations;

    /**
     * Returns a list of relations to a label.
     *
     * @return RelationToLabelList
     */
    public function getLabelRelations(): RelationToLabelList
    {
        return $this->labelRelations;
    }

    /**
     * Sets a list of relations to a label by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setLabelRelationsFromArray(array $input): void
    {
        $this->labelRelations = is_null($input = ArrayAccess::getArray($input, EntityType::LABEL))
            ? new RelationToLabelList
            : new RelationToLabelList($input);
    }
}
