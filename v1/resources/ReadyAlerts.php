<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\ReadyAlert;

/**
 * Description of ReadyAlerts
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class ReadyAlerts extends BaseResource {
    
    public function get($id = null)
    {
        throw new \Crewsense\apisdk\common\exceptions\Exception('The endpoint GET ready_alerts does not exists.');
    }
    
    public function patch(\Crewsense\apisdk\common\BaseEntity $entity)
    {
        throw new \Crewsense\apisdk\common\exceptions\Exception('The endpoint PATCH ready_alerts does not exists.');
    }
    
    public function delete(\Crewsense\apisdk\common\BaseEntity $entity)
    {
        throw new \Crewsense\apisdk\common\exceptions\Exception('The endpoint DELETE ready_alerts does not exists.');
    }

    public static function getEntityClass()
    {
        return ReadyAlert::className();
    }

}
