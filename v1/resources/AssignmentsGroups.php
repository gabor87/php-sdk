<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildResource;

/**
 * Description of AssignmentsGroups
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class AssignmentsGroups extends BaseChildResource
{
    public static function getParentClass()
    {
        return Assignments::className();
    }
}
