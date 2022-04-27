<?php

namespace ContainerHWRZVPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVarDumper_HtmlDumperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';

        $container->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)))]);

        return $instance;
    }
}
