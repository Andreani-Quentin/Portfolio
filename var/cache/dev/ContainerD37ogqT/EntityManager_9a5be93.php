<?php

namespace ContainerD37ogqT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb7531 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2c6cc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2ad10 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getConnection', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getMetadataFactory', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getExpressionBuilder', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'beginTransaction', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getCache', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'transactional', array('func' => $func), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->transactional($func);
    }

    public function commit()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'commit', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->commit();
    }

    public function rollback()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'rollback', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getClassMetadata', array('className' => $className), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'createQuery', array('dql' => $dql), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'createNamedQuery', array('name' => $name), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'createQueryBuilder', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'flush', array('entity' => $entity), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'clear', array('entityName' => $entityName), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->clear($entityName);
    }

    public function close()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'close', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->close();
    }

    public function persist($entity)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'persist', array('entity' => $entity), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'remove', array('entity' => $entity), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'refresh', array('entity' => $entity), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'detach', array('entity' => $entity), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'merge', array('entity' => $entity), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'contains', array('entity' => $entity), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getEventManager', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getConfiguration', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'isOpen', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getUnitOfWork', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getProxyFactory', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'initializeObject', array('obj' => $obj), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'getFilters', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'isFiltersStateClean', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'hasFilters', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return $this->valueHolderb7531->hasFilters();
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

        $instance->initializer2c6cc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb7531) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb7531 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb7531->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, '__get', ['name' => $name], $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        if (isset(self::$publicProperties2ad10[$name])) {
            return $this->valueHolderb7531->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7531;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderb7531;
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
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7531;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderb7531;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, '__isset', array('name' => $name), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7531;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb7531;
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
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, '__unset', array('name' => $name), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7531;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb7531;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, '__clone', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        $this->valueHolderb7531 = clone $this->valueHolderb7531;
    }

    public function __sleep()
    {
        $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, '__sleep', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;

        return array('valueHolderb7531');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2c6cc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2c6cc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2c6cc && ($this->initializer2c6cc->__invoke($valueHolderb7531, $this, 'initializeProxy', array(), $this->initializer2c6cc) || 1) && $this->valueHolderb7531 = $valueHolderb7531;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb7531;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderb7531;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
