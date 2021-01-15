<?php

namespace ContainerYWYlBHQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder096a2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer399cb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbcdd9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getConnection', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getMetadataFactory', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getExpressionBuilder', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'beginTransaction', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getCache', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'transactional', array('func' => $func), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->transactional($func);
    }

    public function commit()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'commit', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->commit();
    }

    public function rollback()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'rollback', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getClassMetadata', array('className' => $className), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'createQuery', array('dql' => $dql), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'createNamedQuery', array('name' => $name), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'createQueryBuilder', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'flush', array('entity' => $entity), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'clear', array('entityName' => $entityName), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->clear($entityName);
    }

    public function close()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'close', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->close();
    }

    public function persist($entity)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'persist', array('entity' => $entity), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'remove', array('entity' => $entity), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'refresh', array('entity' => $entity), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'detach', array('entity' => $entity), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'merge', array('entity' => $entity), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'contains', array('entity' => $entity), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getEventManager', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getConfiguration', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'isOpen', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getUnitOfWork', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getProxyFactory', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'initializeObject', array('obj' => $obj), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'getFilters', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'isFiltersStateClean', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'hasFilters', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return $this->valueHolder096a2->hasFilters();
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

        $instance->initializer399cb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder096a2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder096a2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder096a2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, '__get', ['name' => $name], $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        if (isset(self::$publicPropertiesbcdd9[$name])) {
            return $this->valueHolder096a2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder096a2;

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

        $targetObject = $this->valueHolder096a2;
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
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder096a2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder096a2;
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
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, '__isset', array('name' => $name), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder096a2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder096a2;
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
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, '__unset', array('name' => $name), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder096a2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder096a2;
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
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, '__clone', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        $this->valueHolder096a2 = clone $this->valueHolder096a2;
    }

    public function __sleep()
    {
        $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, '__sleep', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;

        return array('valueHolder096a2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer399cb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer399cb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer399cb && ($this->initializer399cb->__invoke($valueHolder096a2, $this, 'initializeProxy', array(), $this->initializer399cb) || 1) && $this->valueHolder096a2 = $valueHolder096a2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder096a2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder096a2;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
