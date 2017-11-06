<?php

namespace Crewsense\apisdk\common;

/**
 * Description of ResourcePostTrait
 *
 * @author Varga Gábor <gabor87@outlook.com>
 * 
 * @property \Crewsense\apisdk\v1\Client $client Description
 */
trait ResourcePostTrait {
    
    public function post(BaseEntity $entity)
    {
        return $this->client->post($this->getResourcePath(), [
            'body' => $entity->toArray(),
        ]);
    }
    
}
