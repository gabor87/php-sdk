<?php

namespace Crewsense\apisdk\common;

/**
 * Description of ResourcePutTrait
 *
 * @author Varga Gábor <gabor87@outlook.com>
 * 
 * @property \Crewsense\apisdk\v1\Client $client Description
 */
trait ResourcePutTrait {
    
    public function put(BaseEntity $entity)
    {
        return $this->client->put($this->getResourcePath(), [
            'body' => $entity->toArray(),
        ]);
    }
    
}
