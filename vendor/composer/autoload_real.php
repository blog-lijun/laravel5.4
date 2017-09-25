<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit57c106a1b6f79270f5d9719db73ec896
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()  //自动加载方法
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit57c106a1b6f79270f5d9719db73ec896', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit57c106a1b6f79270f5d9719db73ec896', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\Composer\Autoload\ComposerStaticInit57c106a1b6f79270f5d9719db73ec896::getInitializer($loader));
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
            $includeFiles = Composer\Autoload\ComposerStaticInit57c106a1b6f79270f5d9719db73ec896::$files;
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire57c106a1b6f79270f5d9719db73ec896($fileIdentifier, $file);
        }

        return $loader;
    }
}

function composerRequire57c106a1b6f79270f5d9719db73ec896($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
