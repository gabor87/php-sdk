<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\TimeOff;

/**
 * Description of TimeOffs
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class TimeOffs extends BaseResource {
    
    public static function getEntityClass()
    {
        return TimeOff::className();
    }

}
