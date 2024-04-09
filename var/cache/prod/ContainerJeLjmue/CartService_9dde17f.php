<?php

namespace ContainerJeLjmue;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/CartService.php';
class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4651d = null;
    private $initializera0d8d = null;
    private static $publicProperties5a8c8 = [
        
    ];
    public function getCarts($empty_delete = false)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getCarts($empty_delete);
    }
    public function getPersistedCarts()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getPersistedCarts', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getPersistedCarts();
    }
    public function getSessionCarts()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getSessionCarts', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getSessionCarts();
    }
    public function mergeFromPersistedCart()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'mergeFromPersistedCart', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->mergeFromPersistedCart();
    }
    public function getCart()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getCart', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getCart();
    }
    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->addProduct($ProductClass, $quantity);
    }
    public function removeProduct($ProductClass)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->removeProduct($ProductClass);
    }
    public function save()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'save', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->save();
    }
    public function setPreOrderId($pre_order_id)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->setPreOrderId($pre_order_id);
    }
    public function getPreOrderId()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'getPreOrderId', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->getPreOrderId();
    }
    public function clear()
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'clear', array(), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->clear();
    }
    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->setCartItemComparator($cartItemComparator);
    }
    public function setPrimary($cartKey)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        return $this->valueHolder4651d->setPrimary($cartKey);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);
        $instance->initializera0d8d = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;
        if (! $this->valueHolder4651d) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHolder4651d = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
        }
        $this->valueHolder4651d->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }
    public function & __get($name)
    {
        $this->initializera0d8d && ($this->initializera0d8d->__invoke($valueHolder4651d, $this, '__get', ['name' => $name], $this->initializera0d8d) || 1) && $this->valueHolder4651d = $valueHolder4651d;
        if (isset(self::$publicProperties5a8c8[$name])) {
            return $this->valueHolder4651d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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

if (!\class_exists('CartService_9dde17f', false)) {
    \class_alias(__NAMESPACE__.'\\CartService_9dde17f', 'CartService_9dde17f', false);
}
