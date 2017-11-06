<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseResource;
use Crewsense\apisdk\v1\entities\Trade;

/**
 * Description of Trades
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Trades extends BaseResource {
    
    public static function getEntityClass()
    {
        return Trade::className();
    }
    
}
