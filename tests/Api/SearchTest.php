<?php
namespace MusicBrainz\Test\Api;

use MusicBrainz\Filter\Search\AnnotationFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\MusicBrainz;
use MusicBrainz\Value\Annotation;
use MusicBrainz\Value\AnnotationText;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\SearchResult;
use MusicBrainz\Value\SearchResult\AnnotationList;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the search API.
 */
class SearchTest extends TestCase
{
    /**
     * A mock object of the abstract HTTP adapter
     *
     * @var \PHPUnit_Framework_MockObject_MockObject|AbstractHttpAdapter
     */
    private $httpAdapter;

    /**
     * The MusicBrainz API client
     *
     * @var MusicBrainz
     */
    private $musicBrainz;

    /**
     * Sets up a mock object of the abstract HTTP adapter and the MusicBrainz API client to be tested.
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->httpAdapter = $this->getMockBuilder('\MusicBrainz\HttpAdapter\AbstractHttpAdapter')
            ->setMethods(['call'])
            ->getMockForAbstractClass();

        $this->musicBrainz = new \MusicBrainz\MusicBrainz($this->httpAdapter);
    }

    /**
     * Tests, if Search::annotation() properly converts the given JSON response into a domain model and returns it.
     *
     * @return void
     */
    public function testSearchAnnotaion(): void
    {
        /** Setting up the mock object of the abstract HTTP adapter */
        $this->httpAdapter->expects($this->once())
            ->method('call')
            ->with(
                'annotation/',
                $this->musicBrainz->config(),
                [
                    'limit'  => 5,
                    'offset' => 0,
                    'fmt'    => 'json',
                    'query'  => 'text:awesome'
                ]
            )
            ->willReturn(
                json_decode(file_get_contents(__DIR__ . '/../Fixtures/Search/Annotation.json'), true)
            );

        /** Performing the test $annotationFilter */
        $annotationFilter = new AnnotationFilter;
        $annotationFilter->addAnnotationText(new AnnotationText('awesome'));
        $pageFilter = new \MusicBrainz\Filter\PageFilter(0, 5);

        $result = $this->musicBrainz->api()->search()->annotation($annotationFilter, $pageFilter);

        $this->assertInstanceOf(
            AnnotationList::class,
            $result,
            'Expected Search::annotation() to return a search result list of annotations.'
        );

        /** Validating the search result list */
        $this->assertSame(
            68,
            $result->getCount()->getNumber(),
            'Expected the total number of search results to be 68, as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            0,
            $result->getOffset()->getNumber(),
            'Expected the offset to be 68, as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            '2017/07/09 11:49:48',
            (string) $result->getCreationTime(),
            'Expected the creation time to be "2017/07/09 11:49:48", as given in Fixtures/Search/Annotation.json.'
        );

        /**
         * Validating the first search result of the list
         *
         * @var SearchResult $searchResult The first search result of the list
         */
        $searchResult = $result[0];

        $this->assertInstanceOf(
            SearchResult::class,
            $searchResult
        );

        $this->assertSame(
            100,
            $searchResult->getScore()->getNumber()
        );

        /**
         * Validating the value of the first search result.
         *
         * @var Annotation $annotation The value of the first search result
         */
        $annotation = $searchResult->getValue();

        $this->assertSame(
            'Label: Awesome Arts - Cat#: AA001',
            (string) $annotation->getAnnotationText(),
            'Expected the text of the first annotation to be "Label: Awesome Arts - Cat#: AA001", as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            '6370e01e-4fd4-49c4-858b-6f1df7c7fe91',
            (string) $annotation->getMBID(),
            'Expected the MusicBrainz Identifier (MBID) of the annotated entity to be "6370e01e-4fd4-49c4-858b-6f1df7c7fe91", as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            EntityType::RELEASE,
            (string) $annotation->getEntityType(),
            'Expected the annotated entity to be of type release, as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            'Echo Ricochet',
            (string) $annotation->getName(),
            'Expected the name of the annotated entity to be "Echo Ricochet", as given in Fixtures/Search/Annotation.json.'
        );
    }
}
