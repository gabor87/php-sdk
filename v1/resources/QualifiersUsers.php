<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildResource;
use Crewsense\apisdk\v1\entities\QualifierUser;
use Crewsense\apisdk\common\ResourceGetTrait;
use Crewsense\apisdk\common\ResourcePostTrait;
use Crewsense\apisdk\common\ResourceDeleteTrait;

/**
 * Description of QualifiersUsers
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class QualifiersUsers extends BaseChildResource {
    
    use ResourceGetTrait {
        get as traitGet;
    }
    use ResourcePostTrait;
    use ResourceDeleteTrait;

    public static function getParentClass()
    {
        return Qualifiers::className();
    }

    public static function getEntityClass()
    {
        return QualifierUser::className();
    }

}
