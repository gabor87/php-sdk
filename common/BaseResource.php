<?php

namespace Crewsense\apisdk\common;

use Crewsense\apisdk\v1\Client;

/**
 * Description of BaseResource
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
abstract class BaseResource
{
    use ClassNameTrait;
    
    /**
     *
     * @var \Crewsense\apisdk\v1\Client
     */
    protected static $client;
    
    /**
     *
     * @var BaseResource
     */
    protected static $instance;

    /**
     *
     * @var BaseClient
     */
    protected $client;
    
    /**
     * 
     * @param \Crewsense\apisdk\common\BaseClient $client
     * @param type $parent
     */
    public function __construct(BaseClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * 
     * @param \Crewsense\apisdk\common\BaseClient $client
     * @return BaseResource
     */
    public static function getInstance(BaseClient $client = null)
    {
        if (!static::$instance) {
            static::$instance = new static($client ? $client : static::$client);
        }
        
        return static::$instance;
    }
    
    public static function getClient() {
        return self::$client;
    }

    public static function setClient(Client $client) {
        self::$client = $client;
    }

    /**
     * 
     * @return string
     */
    public static function getResourceName()
    {
        $resourceName = (new \ReflectionClass(get_called_class()))->getShortName();
        
        if (is_subclass_of(get_called_class(), BaseChildResource::className())) {
            $parentClassName = call_user_func(static::getParentClass() . '::classShortName');
            $resourceName = str_replace($parentClassName, '', $resourceName);
        }
        
        return strtolower($resourceName);
    }

    /**
     * 
     * @return string
     */
    public function getResourcePath()
    {
        return '/' . static::getResourceName();
    }
    
    /**
     * 
     */
    public static abstract function getEntityClass();

}
