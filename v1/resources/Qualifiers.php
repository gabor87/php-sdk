<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\Qualifier;
use Crewsense\apisdk\common\ResourceGetTrait;
use Crewsense\apisdk\common\ResourcePostTrait;
use Crewsense\apisdk\common\ResourceDeleteTrait;
use Crewsense\apisdk\common\ResourceSendTrait;

/**
 * Description of Qualifiers
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Qualifiers extends BaseResource {
    
    use ResourceGetTrait;
    use ResourcePostTrait;
    use ResourceDeleteTrait;
    use ResourceSendTrait;
    
    public static function getEntityClass()
    {
        return Qualifier::className();
    }

}
