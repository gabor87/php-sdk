<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\User;
use Crewsense\apisdk\common\ResourceGetTrait;
use Crewsense\apisdk\common\ResourcePostTrait;
use Crewsense\apisdk\common\ResourcePatchTrait;
use Crewsense\apisdk\common\ResourceSendTrait;

/**
 * Description of Users
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Users extends BaseResource {
    
    use ResourceGetTrait;
    use ResourcePostTrait;
    use ResourcePatchTrait;
    use ResourceSendTrait;
    
    public static function getEntityClass()
    {
        return User::className();
    }
    
}
