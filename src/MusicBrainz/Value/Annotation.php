<?php

namespace MusicBrainz\Value;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Helper\GetValue;
use MusicBrainz\Value;

/**
 * Annotations are text fields, functioning like a miniature wiki, that can be added to any existing artists, labels,
 * recordings, releases, release groups and works.
 * Their purpose is to add information that usually doesn't fit into the strict structural data schema of MusicBrainz
 * (be it due to technical limitations that may be addressed later, or because the information in itself has to be
 * free-text).
 *
 * @see https://musicbrainz.org/doc/Annotation
 */
class Annotation implements Value
{
    use Property\AnnotationTextTrait;
    use Property\EntityTypeTrait;
    use Property\NameTrait;
    use Property\MBIDTrait;
    use Property\ScoreTrait;

    /**
     * Constructs an annotation.
     *
     * @param array $alias Information about the annotation
     */
    public function __construct(array $alias = [])
    {
        $this->setAnnotationTextFromArray($alias);
        $this->setEntityTypeFromArray($alias);
        $this->setMbidFromArray($alias, 'entity');
        $this->setNameFromArray($alias);
        $this->setScoreFromArray($alias);
    }

    /**
     * Returns the annotation text.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getName();
    }
}
