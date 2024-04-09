<?php

namespace ContainerVTFAYMC;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/TaxRuleService.php';
class TaxRuleService_289f969 extends \Eccube\Service\TaxRuleService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4651d = null;
    private $initializera0d8d = null;
    private static $publicProperties5a8c8 = [
        
    ];
    public function getTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getTax($price, $product, $productClass, $pref, $country);
    }
    public function getPriceIncTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getPriceIncTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getPriceIncTax($price, $product, $productClass, $pref, $country);
    }
    public function calcTax($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'calcTax', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->calcTax($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public function calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'calcTaxIncluded', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->BaseInfo, $instance->taxRuleRepository);
        $instance->initializera0d8d = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Repository\BaseInfoRepository $baseInfoRepository)
    {
        static $reflection;
        if (! $this->valueHolder4651d) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\TaxRuleService');
            $this->valueHolder4651d = $reflection->newInstanceWithoutConstructor();
        unset($this->BaseInfo, $this->taxRuleRepository);
        }
        $this->valueHolder4651d->__construct($taxRuleRepository, $baseInfoRepository);
    }
    public function & __get($name)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__get', ['name' => $name], $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        if (isset(self::$publicProperties5a8c8[$name])) {
            return $this->valueHolder4651d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        unset($this->BaseInfo, $this->taxRuleRepository);
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

if (!\class_exists('TaxRuleService_289f969', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleService_289f969', 'TaxRuleService_289f969', false);
}
