<?php

namespace Crewsense\apisdk\common;

/**
 * Description of ResourceSendTrait
 *
 * @author Varga Gábor <gabor87@outlook.com>
 * 
 * @property \Crewsense\apisdk\v1\Client $client Description
 */
trait ResourceSendTrait {
    
    /**
     * 
     * @param \Crewsense\apisdk\common\BaseEntity $entity
     * @return type
     */
    public function send(BaseEntity $entity)
    {
        if ($entity->isNew()) {
            return $this->post($entity);
        }
        
        return $this->patch($entity);
    }
    
}
