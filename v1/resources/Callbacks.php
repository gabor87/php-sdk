<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseFullResource;
use Crewsense\apisdk\v1\entities\Callback;

/**
 * Description of Callbacks
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Callbacks extends BaseFullResource {
    
    public static function getEntityClass()
    {
        return Callback::className();
    }
    
}
