<?php

namespace MusicBrainz\Filter\Search;

use AskLucy\Phrase;
use AskLucy\Term;
use MusicBrainz\Value\AnnotationText;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A filter for searching annotations
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Annotation
 */
class AnnotationFilter extends AbstractFilter
{
    /**
     * The MusicBrainz Identifier (MBID) of the entity
     *
     * @var string
     */
    public const ENTITY_ID = 'entity';

    /**
     * The annotated entity's name or title
     *
     * @var string
     */
    public const ENTITY_NAME = 'name';

    /**
     * The annotated entity's entity type
     *
     * @var string
     */
    public const ENTITY_TYPE = 'type';

    /**
     * The annotation's content (includes wiki formatting)
     *
     * @var string
     */
    public const ANNOTATION_TEXT = 'text';

    /**
     * Adds the MusicBrainz Identifier (MBID) of the entity.
     *
     * @param MBID $entityId The MusicBrainz Identifier (MBID) of the entity
     *
     * @return Term
     */
    public function addEntityId(MBID $entityId): Term
    {
        return $this->addTerm($entityId, self::ENTITY_ID);
    }

    /**
     * Adds the annotated entity's name or title.
     *
     * @param Name $entityName The annotated entity's name or title
     *
     * @return Phrase
     */
    public function addEntityName(Name $entityName): Phrase
    {
        return $this->addPhrase($entityName, self::ENTITY_NAME);
    }

    /**
     * Adds the annotated entity's type.
     *
     * @param EntityType $entityType The annotated entity's type
     *
     * @return Phrase
     */
    public function addEntityType(EntityType $entityType): Phrase
    {
        return $this->addPhrase($entityType, self::ENTITY_TYPE);
    }

    /**
     * Adds the annotation's content (includes wiki formatting).
     *
     * @param AnnotationText $annotationText The annotation's content (includes wiki formatting)
     *
     * @return Phrase
     */
    public function addAnnotationText(AnnotationText $annotationText): Phrase
    {
        return $this->addPhrase($annotationText, self::ANNOTATION_TEXT);
    }
}
