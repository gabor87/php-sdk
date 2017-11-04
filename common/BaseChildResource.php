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
     * @return string
     */
    public function getResourcePath()
    {
        $parentResourceName = call_user_func(static::getParentClass() . '::getResourceName');
        
        return '/' . $parentResourceName . '/' . $this->parentId . '/' . static::getResourceName();
    }
    
    public static abstract function getParentClass();
}
