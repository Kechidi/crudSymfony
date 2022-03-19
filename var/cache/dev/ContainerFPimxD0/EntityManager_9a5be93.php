<?php

namespace ContainerFPimxD0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder83c75 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58d2b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties313bb = [
        
    ];

    public function getConnection()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getConnection', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getMetadataFactory', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getExpressionBuilder', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'beginTransaction', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getCache', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getCache();
    }

    public function transactional($func)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'transactional', array('func' => $func), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'wrapInTransaction', array('func' => $func), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'commit', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->commit();
    }

    public function rollback()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'rollback', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getClassMetadata', array('className' => $className), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'createQuery', array('dql' => $dql), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'createNamedQuery', array('name' => $name), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'createQueryBuilder', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'flush', array('entity' => $entity), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'clear', array('entityName' => $entityName), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->clear($entityName);
    }

    public function close()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'close', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->close();
    }

    public function persist($entity)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'persist', array('entity' => $entity), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'remove', array('entity' => $entity), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'refresh', array('entity' => $entity), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'detach', array('entity' => $entity), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'merge', array('entity' => $entity), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'contains', array('entity' => $entity), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getEventManager', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getConfiguration', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'isOpen', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getUnitOfWork', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getProxyFactory', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'initializeObject', array('obj' => $obj), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'getFilters', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'isFiltersStateClean', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'hasFilters', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return $this->valueHolder83c75->hasFilters();
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

        $instance->initializer58d2b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder83c75) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder83c75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder83c75->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, '__get', ['name' => $name], $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        if (isset(self::$publicProperties313bb[$name])) {
            return $this->valueHolder83c75->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83c75;

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

        $targetObject = $this->valueHolder83c75;
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
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83c75;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder83c75;
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
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, '__isset', array('name' => $name), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83c75;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder83c75;
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
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, '__unset', array('name' => $name), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83c75;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder83c75;
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
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, '__clone', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        $this->valueHolder83c75 = clone $this->valueHolder83c75;
    }

    public function __sleep()
    {
        $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, '__sleep', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;

        return array('valueHolder83c75');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58d2b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58d2b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer58d2b && ($this->initializer58d2b->__invoke($valueHolder83c75, $this, 'initializeProxy', array(), $this->initializer58d2b) || 1) && $this->valueHolder83c75 = $valueHolder83c75;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder83c75;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder83c75;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
