<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildFullResource;
use Crewsense\apisdk\v1\entities\CallbackUser;

/**
 * Description of CallbacksUsers
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class CallbacksUsers extends BaseChildFullResource {
    
    public static function getParentClass()
    {
        return Callbacks::className();
    }

    public static function getEntityClass()
    {
        return CallbackUser::classShortName();
    }
    
}
