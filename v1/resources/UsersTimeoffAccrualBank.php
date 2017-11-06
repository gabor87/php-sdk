<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildResource;
use Crewsense\apisdk\v1\entities\UserTimeoffAccrualBank;
use Crewsense\apisdk\common\ResourceGetTrait;
use Crewsense\apisdk\common\ResourcePostTrait;

/**
 * Description of UsersTimeoffAccrualBank
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class UsersTimeoffAccrualBank extends BaseChildResource {
    
    use ResourceGetTrait {
        get as traitGet;
    }
    use ResourcePostTrait;
    
    public function get()
    {
        return $this->traitGet();
    }
    
    public static function getParentClass()
    {
        return Users::className();
    }

    public static function getEntityClass()
    {
        return UserTimeoffAccrualBank::className();
    }
    
    public function getResourcePath()
    {
        $parentResourceName = call_user_func(static::getParentClass() . '::getResourceName');
        
        return '/' . $parentResourceName . '/' . $this->parentId . '/timeoff/accrual/bank';
    }
    
}
