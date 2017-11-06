<?php

namespace Crewsense\apisdk\common;

/**
 * Description of ResourcePatchTrait
 *
 * @author Varga Gábor <gabor87@outlook.com>
 * 
 * @property \Crewsense\apisdk\v1\Client $client Description
 */
trait ResourcePatchTrait {
    
    public function patch(BaseEntity $entity)
    {
        if ($entity->isNew()) {
            throw new exceptions\Exception('The entity cannot be updated because it is new.');
        }
        
        return $this->client->patch($this->getResourcePath() . '/' . $entity->id, [
            'body' => $entity->toArray(),
        ]);
    }
    
}
