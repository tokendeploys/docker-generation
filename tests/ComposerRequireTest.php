<?php
namespace Tokendeploys\DockerGeneration\Test;

use PHPUnit\Framework\TestCase;

class ComposerRequireTest extends TestCase
{

    public function testTwigInstalled()
    {
        $this->assertTrue(class_exists('Twig_Environment'));
    }

    public function testSymfonyYamlInstalled()
    {
        $this->assertTrue(class_exists('Symfony\Component\Yaml\Yaml'));
    }

    public function testSymfonyConfigInstalled()
    {
        $this->assertTrue(class_exists('Symfony\Component\Config\FileLocator'));
    }

}
