<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseFullResource;
use Crewsense\apisdk\v1\entities\Assignment;

/**
 * Description of Assignments
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Assignments extends BaseFullResource
{
    /**
     * @ingeritdoc
     */
    public static function getEntityClass() {
        return Assignment::className();
    }
}
