<?php

namespace ContainerJeLjmue;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4651d = null;
    private $initializera0d8d = null;
    private static $publicProperties5a8c8 = [
        
    ];
    public function getDbversion()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getDbversion', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getMemoryLimit', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->switchMaintenance($isEnable, $mode, $force);
    }
    public function getMaintenanceToken() : ?string
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getMaintenanceToken', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getMaintenanceToken();
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\TerminateEvent $event)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->disableMaintenanceEvent($event);
    }
    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $this->valueHolder4651d->enableMaintenance($mode, $force);
return;
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'disableMaintenance', array('mode' => $mode), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->disableMaintenance($mode);
    }
    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        $this->valueHolder4651d->disableMaintenanceNow($mode, $force);
return;
    }
    public function isMaintenanceMode()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'isMaintenanceMode', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializera0d8d = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHolder4651d) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolder4651d = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHolder4651d->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__get', ['name' => $name], $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        if (isset(self::$publicProperties5a8c8[$name])) {
            return $this->valueHolder4651d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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

if (!\class_exists('SystemService_f79b835', false)) {
    \class_alias(__NAMESPACE__.'\\SystemService_f79b835', 'SystemService_f79b835', false);
}
