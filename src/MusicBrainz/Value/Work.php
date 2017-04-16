<?php

namespace MusicBrainz\Value;

/**
 * A work
 * In MusicBrainz terminology, a work is a distinct intellectual or artistic creation, which can be expressed in the
 * form of one or more audio recordings. While a work in MusicBrainz is usually musical in nature, it is not necessarily
 * so. For example, a work could be a novel, play, poem or essay, later recorded as an oratory or audiobook.
 *
 * @link https://musicbrainz.org/doc/Work
 */
class Work
{
    use Property\AttributesTrait;
    use Property\DisambiguationTrait;
    use Property\IswcsTrait;
    use Property\LanguageTrait;
    use Property\MBIDTrait;
    use Property\TitleTrait;
    use Property\WorkTypeTrait;

    /**
     * Constructs a work.
     *
     * @param array $work Information about the track
     */
    public function __construct(array $work = [])
    {
        $this->attributes     = new AttributeList(isset($work['attributes']) ? $work['attributes'] : []);
        $this->disambiguation = new Disambiguation(isset($work['disambiguation']) ? $work['disambiguation'] : '');
        $this->iswcs          = new ISWCList(isset($work['iswcs']) ? $work['iswcs'] : []);
        $this->language       = new Language(isset($work['language']) ? $work['language'] : []);
        $this->MBID           = new MBID(isset($work['id']) ? $work['id'] : '');
        $this->title          = new Title(isset($work['title']) ? $work['title'] : '');
        $this->workType       = new WorkType(isset($work['type']) ? $work['type'] : '');
    }

    /**
     * Returns the title of the work as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getTitle();
    }
}
