<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseFullResource;
use Crewsense\apisdk\v1\entities\Filter;

/**
 * Description of Filters
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Filters extends BaseFullResource {
    
    public static function getEntityClass()
    {
        return Filter::className();
    }

}
