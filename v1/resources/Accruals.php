<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\Accrual;
use Crewsense\apisdk\common\ResourceGetTrait;

/**
 * Description of Accruals
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Accruals extends BaseResource {
    
    use ResourceGetTrait {
        get as traitGet;
    }
    
    public function get()
    {
        return $this->traitGet();
    }
    
    public static function getEntityClass()
    {
        return Accrual::className();
    }
    
}
