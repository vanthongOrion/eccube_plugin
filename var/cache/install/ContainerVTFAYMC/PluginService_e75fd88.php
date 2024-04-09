<?php

namespace ContainerVTFAYMC;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4651d = null;
    private $initializera0d8d = null;
    private static $publicProperties5a8c8 = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'install', array('path' => $path, 'source' => $source), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'installWithCode', array('code' => $code), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'preInstall', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'createTempDir', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'deleteDirs', array('arr' => $arr), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'checkSymbolName', array('string' => $string), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'deleteFile', array('path' => $path), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'checkSamePlugin', array('code' => $code), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'calcPluginDir', array('code' => $code), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'createPluginDir', array('d' => $d), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'unregisterPlugin', array('p' => $p), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'disable', array('plugin' => $plugin), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializera0d8d = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder4651d) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolder4651d = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolder4651d->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__get', ['name' => $name], $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        if (isset(self::$publicProperties5a8c8[$name])) {
            return $this->valueHolder4651d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4651d;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4651d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4651d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4651d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__isset', array('name' => $name), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4651d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder4651d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__unset', array('name' => $name), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4651d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder4651d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__clone', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $this->valueHolder4651d = clone $this->valueHolder4651d;
    }
    public function __sleep()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__sleep', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return array('valueHolder4651d');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0d8d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0d8d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'initializeProxy', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4651d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4651d;
    }
}

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
