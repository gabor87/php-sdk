<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\VisualCycle;

/**
 * Description of VisualCycles
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class VisualCycles extends BaseResource {
    
    public static function getEntityClass() 
    {
        return VisualCycle::className();
    }
    
}
