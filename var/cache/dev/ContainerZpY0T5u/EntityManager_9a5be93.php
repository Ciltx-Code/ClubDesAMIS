<?php

namespace ContainerZpY0T5u;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf945b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2c57a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf3830 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getConnection', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getMetadataFactory', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getExpressionBuilder', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'beginTransaction', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getCache', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'transactional', array('func' => $func), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'commit', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->commit();
    }

    public function rollback()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'rollback', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getClassMetadata', array('className' => $className), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'createQuery', array('dql' => $dql), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'createNamedQuery', array('name' => $name), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'createQueryBuilder', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'flush', array('entity' => $entity), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'clear', array('entityName' => $entityName), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->clear($entityName);
    }

    public function close()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'close', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->close();
    }

    public function persist($entity)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'persist', array('entity' => $entity), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'remove', array('entity' => $entity), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'refresh', array('entity' => $entity), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'detach', array('entity' => $entity), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'merge', array('entity' => $entity), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'contains', array('entity' => $entity), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getEventManager', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getConfiguration', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'isOpen', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getUnitOfWork', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getProxyFactory', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'initializeObject', array('obj' => $obj), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'getFilters', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'isFiltersStateClean', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'hasFilters', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return $this->valueHolderf945b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2c57a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf945b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf945b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf945b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, '__get', ['name' => $name], $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        if (isset(self::$publicPropertiesf3830[$name])) {
            return $this->valueHolderf945b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf945b;

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

        $targetObject = $this->valueHolderf945b;
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
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf945b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf945b;
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
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, '__isset', array('name' => $name), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf945b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf945b;
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
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, '__unset', array('name' => $name), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf945b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf945b;
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
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, '__clone', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        $this->valueHolderf945b = clone $this->valueHolderf945b;
    }

    public function __sleep()
    {
        $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, '__sleep', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;

        return array('valueHolderf945b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2c57a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2c57a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2c57a && ($this->initializer2c57a->__invoke($valueHolderf945b, $this, 'initializeProxy', array(), $this->initializer2c57a) || 1) && $this->valueHolderf945b = $valueHolderf945b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf945b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf945b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
