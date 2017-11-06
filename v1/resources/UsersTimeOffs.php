<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildResource;
use Crewsense\apisdk\v1\entities\UserTimeOff;

/**
 * Description of UsersTimeOffs
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class UsersTimeOffs extends BaseChildResource {
    
    public static function getParentClass()
    {
        return Users::className();
    }

    public static function getEntityClass()
    {
        return UserTimeOff::className();
    }

}
