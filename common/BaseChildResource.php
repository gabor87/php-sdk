<?php

namespace Crewsense\apisdk\common;

/**
 * Description of BaseChildResource
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
abstract class BaseChildResource extends BaseResource
{    
    /**
     *
     * @var string
     */
    protected $parentId;
    
    /**
     * 
     * @param \Crewsense\apisdk\common\BaseClient $client
     * @param type $parentId
     */
    public function __construct(BaseClient $client, $parentId)
    {
        parent::__construct($client);
        
        $this->parentId = $parentId;
    }
    
    /**
     * 
     * @param \Crewsense\apisdk\common\BaseClient $client
     * @return BaseResource
     */
    public static function getInstance(BaseClient $client, $parentId)
    {
        if (!static::$instance) {
            static::$instance = new static($client ? $client : static::$client, $parentId);
        }
        
        return static::$instance;
    }
    
    /**
     * 
     * @return string
     */
    public function getResourcePath()
    {
        $parentResourceName = call_user_func(static::getParentClass() . '::getResourceName');
        
        return '/' . $parentResourceName . '/' . $this->parentId . '/' . static::getResourceName();
    }
    
    public static abstract function getParentClass();
}
