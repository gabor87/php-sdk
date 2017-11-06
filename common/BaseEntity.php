<?php

namespace Crewsense\apisdk\common;

use Crewsense\apisdk\common\ClassNameTrait;

/**
 * Description of BaseEntity
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class BaseEntity
{
    use ClassNameTrait;
    
    public $id;
    
    public function isNew()
    {
        return (bool) $this->id;
    }
    
    public function getProperties()
    {
        return (new \ReflectionClass($this))->getProperties(\ReflectionProperty::IS_PUBLIC);
    }
    
    public function toArray()
    {
        $asArray = [];
        
        foreach ($this->getProperties() as $property) {
            $asArray[$property] = $this->$property;
        }
        
        return $asArray;
    }
    
    public static function processGetResponse($response, $one)
    {
        $data = \json_decode($response->getBody());
        
        $entityClass = static::getEntityClass();
        
        if ($one) {
            $entity = new $entityClass();
            
            foreach ($data as $property => $value) {
                $entity->$property = $value;
            }
            
            return $entity;
        }
        
        $entities = [];
        foreach ($data as $object) {
            $entity = new $entityClass();
            $entities[] = $entity;
            
            foreach ($object as $property => $value) {
                $entity->$property = $value;
            }
        }
        
        return $entities;
    }
}
