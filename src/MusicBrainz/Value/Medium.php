<?php

namespace MusicBrainz\Value;

/**
 * A medium
 */
class Medium
{
    use Property\TracksTrait;
    use Property\TitleTrait;
    use Property\DiscsTrait;

    /**
     * Constructs a medium.
     *
     * @param array $medium Information about the medium
     */
    public function __construct(array $medium = [])
    {
        $this->tracks = new TrackList(isset($medium['tracks']) ? $medium['tracks'] : []);
        $this->title  = new Title(isset($medium['title']) ? $medium['title'] : '');
        $this->discs  = new DiscList(isset($medium['discs']) ? $medium['discs'] : []);
    }

    /**
     * Returns the title of the medium as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getTitle();
    }
}
