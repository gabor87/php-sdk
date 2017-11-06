<?php

namespace Crewsense\apisdk\common;

/**
 * Description of ResourceDeleteTrait
 *
 * @author Varga Gábor <gabor87@outlook.com>
 * 
 * @property \Crewsense\apisdk\v1\Client $client Description
 */
trait ResourceDeleteTrait {
    
    public function delete(BaseEntity $entity)
    {
        if ($entity->isNew()) {
            throw new exceptions\Exception('The entity cannot be deleted because it is new.');
        }
        
        return $this->client->delete($this->getResourcePath() . '/' . $entity->id);
    }
    
}
