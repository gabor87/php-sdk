<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\Log;
use Crewsense\apisdk\common\BaseEntity;

/**
 * Description of Logs
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Logs extends BaseResource {
    
    public function get($after)
    {
        $response = $this->client->get($this->getResourcePath() . '/' . $after);
        
        return BaseEntity::processGetResponse($response, false);
    }
    
    public static function getEntityClass()
    {
        return Log::className();
    }
    
}
