<?php
namespace MusicBrainz\Test\Api;

use MusicBrainz\Filter\Search\AnnotationFilter;
use MusicBrainz\Value\Annotation;
use MusicBrainz\Value\AnnotationText;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\SearchResult;
use MusicBrainz\Value\SearchResult\AnnotationList;

/**
 * Unit tests for the search API.
 */
class AnnotationTest extends ApiTestCase
{
    /**
     * Test instance of the annotation list
     *
     * @var AnnotationList
     */
    private static $annotationList;

    /**
     * Sets up a mock object of the abstract HTTP adapter and the MusicBrainz API client to be tested.
     *
     * @return void
     */
    public function setUp(): void
    {
        if (!is_null(self::$annotationList)) {
            return;
        }

        parent::setUp();

        /** Setting up the mock object of the abstract HTTP adapter */
        $this->expectApiCall(
            'annotation/',
            [
                'limit'  => 5,
                'offset' => 0,
                'fmt'    => 'json',
                'query'  => 'text:awesome'
            ],
            'Search/Annotation.json'
        );

        /** Performing the test */
        $annotationFilter = new AnnotationFilter;
        $annotationFilter->addAnnotationText(new AnnotationText('awesome'));
        $pageFilter = new \MusicBrainz\Filter\PageFilter(0, 5);

        self::$annotationList = $this->musicBrainz->api()->search()->annotation($annotationFilter, $pageFilter);
    }

    /**
     * Checks the annotation list.
     *
     * @return void
     */
    public function testAnnotaion(): void
    {
        $annotationList = self::$annotationList;

        $this->assertInstanceOf(AnnotationList::class, $annotationList);

        $this->assertSame(5, count($annotationList));

        $this->assertSame(68,$annotationList->getCount()->getNumber());

        $this->assertSame(0, $annotationList->getOffset()->getNumber());

        $this->assertSame('2017/07/09 11:49:48',(string) $annotationList->getCreationTime());

        /**
         * Validating the first search result of the list
         *
         * @var SearchResult $searchResult The first search result of the list
         */
        $searchResult = $annotationList[0];

        $this->assertInstanceOf(SearchResult::class, $searchResult);

        $this->assertSame(100, $searchResult->getScore()->getNumber());

        /**
         * Validating the value of the first search result.
         *
         * @var Annotation $annotation The value of the first search result
         */
        $annotation = $searchResult->getValue();

        $this->assertSame('Label: Awesome Arts - Cat#: AA001', (string) $annotation->getAnnotationText());

        $this->assertSame('6370e01e-4fd4-49c4-858b-6f1df7c7fe91', (string) $annotation->getMBID());

        $this->assertSame(EntityType::RELEASE, (string) $annotation->getEntityType());
        $this->assertSame('Echo Ricochet', (string) $annotation->getName());
    }
}
