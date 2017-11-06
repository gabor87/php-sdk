<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildResource;
use Crewsense\apisdk\v1\entities\UserTimeoffAccrualProfile;
use Crewsense\apisdk\common\ResourceGetTrait;

/**
 * Description of UsersTimeoffAccrualProfile
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class UsersTimeoffAccrualProfile extends BaseChildResource {
    
    use ResourceGetTrait {
        get as traitGet;
    }
    
    public function get()
    {
        return $this->traitGet();
    }
    
    public static function getParentClass()
    {
        return UserTimeoffAccrualProfile::className();
    }

    public static function getEntityClass()
    {
        return Users::className();
    }

}
