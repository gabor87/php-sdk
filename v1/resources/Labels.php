<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseFullResource;
use Crewsense\apisdk\v1\entities\Label;

/**
 * Description of Labels
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Labels extends BaseFullResource {
    
    public static function getEntityClass()
    {
        return Label::className();
    }
    
}
