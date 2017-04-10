<?php

namespace Tokendeploys\DockerGeneration\Test;

use PHPUnit\Framework\TestCase;
use Tokendeploys\DockerGeneration\Api\ManifestParserInterface;
use Tokendeploys\DockerGeneration\ManifestParser;
use Tokendeploys\DockerGeneration\Api\ManifestInterface;

class ParserTest extends TestCase
{

    /**
     * @var ManifestParserInterface
     */
    protected $parser;

    public function setup()
    {
        $this->parser = new ManifestParser();
    }

    public function testImplementsInterface()
    {
        $this->assertTrue($this->parser instanceof ManifestParserInterface);
    }

    public function testReturnsArray()
    {
        $manifestFile = __DIR__ . '/fixtures/simple_config.yml';
        $result = $this->parser->parse($manifestFile);
        $this->assertTrue(is_array($result));
    }

    public function testThrowsExceptionManifestFileNotFound()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(ManifestInterface::E_MANIFEST_FILE_NOT_FOUND);
        $this->parser->parse('/tmp/nonexsting.yml');
    }

}
