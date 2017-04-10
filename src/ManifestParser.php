<?php

namespace Tokendeploys\DockerGeneration;

use Tokendeploys\DockerGeneration\Api\ManifestParserInterface;
use Tokendeploys\DockerGeneration\Api\ManifestInterface;

class ManifestParser implements ManifestParserInterface
{

    /**
     * @param string $manifestFile
     *
     * @return array
     * @throws \Throwable
     */
    public function parse(string $manifestFile)
    {
        $fileContents = @file_get_contents($manifestFile);
        if ($fileContents === false) {
            throw new \RuntimeException(
                sprintf('Manifest "%s" can not be found', $manifestFile),
                ManifestInterface::E_MANIFEST_FILE_NOT_FOUND
            );
        }
        return \Symfony\Component\Yaml\Yaml::parse(file_get_contents($manifestFile));
    }

}