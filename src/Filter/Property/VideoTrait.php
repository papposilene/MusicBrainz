<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Expression\Clause\Term;
use MusicBrainz\Value\Tag;

trait VideoTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the flag to only show video tracks.
     *
     * @return string
     */
    public static function video(): string
    {
        return 'video';
    }

    /**
     * Adds a flag to only show video tracks.
     *
     * @param bool $video True to only show video tracks
     *
     * @return Term
     */
    public function addVideo(bool $video): Term
    {
        return $this->addTerm($video, self::video());
    }
}