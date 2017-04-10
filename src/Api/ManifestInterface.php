<?php declare(strict_types=1);

namespace Tokendeploys\DockerGeneration\Api;

interface ManifestInterface
{
    CONST E_MANIFEST_FILE_NOT_FOUND          = 1;
    CONST E_MANIFEST_INVALID                 = 2;

    /**
     * @return string
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getLicense();

    /**
     * @return string
     */
    public function getMaintainerName();

    /**
     * @return string
     */
    public function getMaintainerEmail();

    /**
     * Base directory for dockerfile/compose generation
     *
     * @return string
     */
    public function getGenerationDir();

    /**
     * @return string
     */
    public function getRegistryHost();

    /**
     * @return string
     */
    public function getRegistryPort();

    /**
     * @return string
     */
    public function getManifestFile();

    /**
     * @return string
     */
    public function getManifestDir();

    /**
     * @return ImageInterface[]
     */
    public function getImages();

}