<?php

namespace ContainerX8TrMqT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7e73e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6178c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58dc4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getConnection', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getMetadataFactory', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getExpressionBuilder', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'beginTransaction', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getCache', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'transactional', array('func' => $func), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'commit', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->commit();
    }

    public function rollback()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'rollback', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getClassMetadata', array('className' => $className), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'createQuery', array('dql' => $dql), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'createNamedQuery', array('name' => $name), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'createQueryBuilder', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'flush', array('entity' => $entity), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'clear', array('entityName' => $entityName), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->clear($entityName);
    }

    public function close()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'close', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->close();
    }

    public function persist($entity)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'persist', array('entity' => $entity), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'remove', array('entity' => $entity), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'refresh', array('entity' => $entity), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'detach', array('entity' => $entity), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'merge', array('entity' => $entity), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'contains', array('entity' => $entity), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getEventManager', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getConfiguration', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'isOpen', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getUnitOfWork', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getProxyFactory', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'initializeObject', array('obj' => $obj), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'getFilters', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'isFiltersStateClean', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'hasFilters', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return $this->valueHolder7e73e->hasFilters();
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

        $instance->initializer6178c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7e73e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7e73e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7e73e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, '__get', ['name' => $name], $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        if (isset(self::$publicProperties58dc4[$name])) {
            return $this->valueHolder7e73e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e73e;

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

        $targetObject = $this->valueHolder7e73e;
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
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e73e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e73e;
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
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, '__isset', array('name' => $name), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e73e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7e73e;
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
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, '__unset', array('name' => $name), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e73e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7e73e;
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
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, '__clone', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        $this->valueHolder7e73e = clone $this->valueHolder7e73e;
    }

    public function __sleep()
    {
        $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, '__sleep', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;

        return array('valueHolder7e73e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6178c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6178c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6178c && ($this->initializer6178c->__invoke($valueHolder7e73e, $this, 'initializeProxy', array(), $this->initializer6178c) || 1) && $this->valueHolder7e73e = $valueHolder7e73e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e73e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e73e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
