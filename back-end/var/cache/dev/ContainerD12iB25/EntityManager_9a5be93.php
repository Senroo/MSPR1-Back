<?php

namespace ContainerD12iB25;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder904df = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1e6f9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties73e5d = [
        
    ];

    public function getConnection()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getConnection', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getMetadataFactory', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getExpressionBuilder', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'beginTransaction', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getCache', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'transactional', array('func' => $func), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->transactional($func);
    }

    public function commit()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'commit', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->commit();
    }

    public function rollback()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'rollback', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getClassMetadata', array('className' => $className), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'createQuery', array('dql' => $dql), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'createNamedQuery', array('name' => $name), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'createQueryBuilder', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'flush', array('entity' => $entity), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'clear', array('entityName' => $entityName), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->clear($entityName);
    }

    public function close()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'close', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->close();
    }

    public function persist($entity)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'persist', array('entity' => $entity), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'remove', array('entity' => $entity), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'refresh', array('entity' => $entity), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'detach', array('entity' => $entity), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'merge', array('entity' => $entity), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'contains', array('entity' => $entity), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getEventManager', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getConfiguration', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'isOpen', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getUnitOfWork', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getProxyFactory', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'initializeObject', array('obj' => $obj), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'getFilters', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'isFiltersStateClean', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'hasFilters', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return $this->valueHolder904df->hasFilters();
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

        $instance->initializer1e6f9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder904df) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder904df = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder904df->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, '__get', ['name' => $name], $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        if (isset(self::$publicProperties73e5d[$name])) {
            return $this->valueHolder904df->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder904df;

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

        $targetObject = $this->valueHolder904df;
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
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder904df;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder904df;
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
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, '__isset', array('name' => $name), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder904df;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder904df;
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
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, '__unset', array('name' => $name), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder904df;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder904df;
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
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, '__clone', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        $this->valueHolder904df = clone $this->valueHolder904df;
    }

    public function __sleep()
    {
        $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, '__sleep', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;

        return array('valueHolder904df');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1e6f9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1e6f9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1e6f9 && ($this->initializer1e6f9->__invoke($valueHolder904df, $this, 'initializeProxy', array(), $this->initializer1e6f9) || 1) && $this->valueHolder904df = $valueHolder904df;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder904df;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder904df;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
