<?php

namespace MusicBrainz\Value;

/**
 * A series
 * A series is a sequence of separate release groups, releases, recordings, works or events with a common theme. The
 * theme is usually prominent in the branding of the entities in the series and the individual entities will often have
 * been given a number indicating the position in the series.
 *
 * @see https://wiki.musicbrainz.org/Series
 */
class Series
{
    use Property\AliasesTrait;
    use Property\DisambiguationTrait;
    use Property\NameTrait;
    use Property\MBIDTrait;

    /**
     * Constructs a series.
     *
     * @param array $series Array of information about the series
     */
    public function __construct(array $series = [])
    {
        $this->aliases        = new AliasList(isset($series['aliases']) ? $series['aliases'] : []);
        $this->disambiguation = new Disambiguation(isset($series['disambiguation']) ? $series['disambiguation'] : []);
        $this->name           = new Name(isset($series['name']) ? $series['name'] : '');
        $this->MBID           = new MBID(isset($series['id']) ? $series['id'] : '');
    }
}
