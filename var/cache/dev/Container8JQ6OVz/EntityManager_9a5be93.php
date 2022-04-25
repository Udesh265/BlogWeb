<?php

namespace Container8JQ6OVz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1aabb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2204f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd9bbb = [
        
    ];

    public function getConnection()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getConnection', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getMetadataFactory', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getExpressionBuilder', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'beginTransaction', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getCache', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'transactional', array('func' => $func), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'commit', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->commit();
    }

    public function rollback()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'rollback', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getClassMetadata', array('className' => $className), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'createQuery', array('dql' => $dql), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'createNamedQuery', array('name' => $name), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'createQueryBuilder', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'flush', array('entity' => $entity), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'clear', array('entityName' => $entityName), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->clear($entityName);
    }

    public function close()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'close', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->close();
    }

    public function persist($entity)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'persist', array('entity' => $entity), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'remove', array('entity' => $entity), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'refresh', array('entity' => $entity), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'detach', array('entity' => $entity), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'merge', array('entity' => $entity), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'contains', array('entity' => $entity), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getEventManager', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getConfiguration', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'isOpen', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getUnitOfWork', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getProxyFactory', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'initializeObject', array('obj' => $obj), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'getFilters', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'isFiltersStateClean', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'hasFilters', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return $this->valueHolder1aabb->hasFilters();
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

        $instance->initializer2204f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1aabb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1aabb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1aabb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, '__get', ['name' => $name], $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        if (isset(self::$publicPropertiesd9bbb[$name])) {
            return $this->valueHolder1aabb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aabb;

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

        $targetObject = $this->valueHolder1aabb;
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
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aabb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1aabb;
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
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, '__isset', array('name' => $name), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aabb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1aabb;
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
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, '__unset', array('name' => $name), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aabb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1aabb;
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
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, '__clone', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        $this->valueHolder1aabb = clone $this->valueHolder1aabb;
    }

    public function __sleep()
    {
        $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, '__sleep', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;

        return array('valueHolder1aabb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2204f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2204f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2204f && ($this->initializer2204f->__invoke($valueHolder1aabb, $this, 'initializeProxy', array(), $this->initializer2204f) || 1) && $this->valueHolder1aabb = $valueHolder1aabb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1aabb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1aabb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
