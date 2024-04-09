<?php

namespace ContainerJeLjmue;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4651d = null;
    private $initializera0d8d = null;
    private static $publicProperties5a8c8 = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null, $from = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output, 'from' => $from), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->execRequire($packageName, $output, $from);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0) : void
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $this->valueHolder4651d->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
return;
    }
    public function execConfig($key, $value = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getConfig', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo) : void
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $this->valueHolder4651d->configureRepository($BaseInfo);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializera0d8d = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder4651d) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHolder4651d = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHolder4651d->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__get', ['name' => $name], $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        if (isset(self::$publicProperties5a8c8[$name])) {
            return $this->valueHolder4651d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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

if (!\class_exists('ComposerApiService_c77e330', false)) {
    \class_alias(__NAMESPACE__.'\\ComposerApiService_c77e330', 'ComposerApiService_c77e330', false);
}
