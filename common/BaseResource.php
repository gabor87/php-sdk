<?php

namespace Crewsense\apisdk\common;

/**
 * Description of BaseResource
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class BaseResource
{
    use ClassNameTrait;
    
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
    public function __construct(BaseClient $client, $parent = null)
    {
        $this->client = $client;
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

    public function get($id = null)
    {
        return $this->client->get($this->getResourcePath() . '/' . $id);
    }
    
    public function post($data)
    {
        return $this->client->post($this->getResourcePath(), [
            'body' => $data,
        ]);
    }
    
    public function patch($id, $data)
    {
        return $this->client->patch($this->getResourcePath() . '/' . $id, [
            'body' => $data,
        ]);
    }
    
    public function delete($id)
    {
        return $this->client->delete($this->getResourcePath() . '/' . $id);
    }

}
