<?php

namespace MusicBrainz\Value;

/**
 * Annotations are text fields, functioning like a miniature wiki, that can be added to any existing artists, labels,
 * recordings, releases, release groups and works.
 * Their purpose is to add information that usually doesn't fit into the strict structural data schema of MusicBrainz
 * (be it due to technical limitations that may be addressed later, or because the information in itself has to be
 * free-text).
 *
 * @see https://musicbrainz.org/doc/Annotation
 */
class Annotation
{
    use Property\EntityTypeTrait;
    use Property\ScoreTrait;
    use Property\MBIDTrait;
    use Property\NameTrait;
    use Property\TextTrait;

    /**
     * Constructs an alias.
     *
     * @param array $alias An array with information about the alias
     */
    public function __construct(array $alias = [])
    {
        $this->entityType = new EntityType(isset($alias['type']) ? (string) $alias['type'] : '');
        $this->score      = new Score(isset($alias['score']) ? (string) $alias['score'] : '');
        $this->MBID       = new MBID(isset($alias['entity']) ? (string) $alias['entity'] : '');
        $this->name       = new Name(isset($alias['name']) ? (string) $alias['name'] : '');
        $this->text       = new Text(isset($alias['text']) ? (string) $alias['text'] : '');
    }

    /**
     * Returns the annotation text.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getName();
    }
}
