<?php declare(strict_types=1);

namespace Tokendeploys\DockerGeneration\Api;

interface ManifestParserInterface
{
    /**
     * @param string $manifestFile
     * @return array
     * @throws \Throwable
     */
    public function parse(string $manifestFile);

}