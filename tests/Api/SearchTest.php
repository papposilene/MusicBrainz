<?php
namespace MusicBrainz\Test\Api;

use MusicBrainz\Filter\Search\AnnotationFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\MusicBrainz;
use MusicBrainz\Value\AnnotationText;
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

    public function testSearchAnnotaion(): void
    {
        $this->httpAdapter->expects($this->once())
            ->method('call')
            ->with(
                'annotation/',
                $this->musicBrainz->config(),
                [
                    'limit'  => 5,
                    'offset' => 0,
                    'fmt'    => 'json',
                    'query'  => 'text:lyrics'
                ]
            )
            ->willReturn(
                json_decode(file_get_contents(__DIR__ . '/../Fixtures/Search/Annotation.json'), true)
            );

        $annotationFilter = new AnnotationFilter;
        $annotationFilter->addAnnotationText(new AnnotationText('lyrics'));
        $pageFilter = new \MusicBrainz\Filter\PageFilter(0, 5);

        $result = $this->musicBrainz->api()->search()->annotation($annotationFilter, $pageFilter);

        $this->assertInstanceOf(
            AnnotationList::class,
            $result
        );
    }
}
