<?php

namespace ContainerCxzrof6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf5906 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd228d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc05c5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getConnection', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getMetadataFactory', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getExpressionBuilder', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'beginTransaction', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getCache', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'transactional', array('func' => $func), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->transactional($func);
    }

    public function commit()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'commit', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->commit();
    }

    public function rollback()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'rollback', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getClassMetadata', array('className' => $className), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'createQuery', array('dql' => $dql), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'createNamedQuery', array('name' => $name), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'createQueryBuilder', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'flush', array('entity' => $entity), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'clear', array('entityName' => $entityName), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->clear($entityName);
    }

    public function close()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'close', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->close();
    }

    public function persist($entity)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'persist', array('entity' => $entity), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'remove', array('entity' => $entity), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'refresh', array('entity' => $entity), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'detach', array('entity' => $entity), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'merge', array('entity' => $entity), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'contains', array('entity' => $entity), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getEventManager', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getConfiguration', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'isOpen', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getUnitOfWork', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getProxyFactory', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'initializeObject', array('obj' => $obj), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'getFilters', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'isFiltersStateClean', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'hasFilters', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return $this->valueHolderf5906->hasFilters();
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

        $instance->initializerd228d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf5906) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf5906 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf5906->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, '__get', ['name' => $name], $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        if (isset(self::$publicPropertiesc05c5[$name])) {
            return $this->valueHolderf5906->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5906;

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

        $targetObject = $this->valueHolderf5906;
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
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5906;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf5906;
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
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, '__isset', array('name' => $name), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5906;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf5906;
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
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, '__unset', array('name' => $name), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5906;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf5906;
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
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, '__clone', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        $this->valueHolderf5906 = clone $this->valueHolderf5906;
    }

    public function __sleep()
    {
        $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, '__sleep', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;

        return array('valueHolderf5906');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd228d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd228d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd228d && ($this->initializerd228d->__invoke($valueHolderf5906, $this, 'initializeProxy', array(), $this->initializerd228d) || 1) && $this->valueHolderf5906 = $valueHolderf5906;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf5906;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf5906;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
