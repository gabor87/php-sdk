<?php

namespace Crewsense\apisdk\common;

/**
 * Description of ResourceGetTrait
 *
 * @author Varga Gábor <gabor87@outlook.com>
 * 
 * @property \Crewsense\apisdk\v1\Client $client Description
 */
trait ResourceGetTrait {
    
    /**
     * 
     * @param type $id
     * @return BaseEntity
     */
    public function get($id = null)
    {
        $response = $this->client->get($this->getResourcePath() . ($id ? '/' . $id : ''));
        
        return BaseEntity::processGetResponse($response, (bool) $id);
    }
    
}
