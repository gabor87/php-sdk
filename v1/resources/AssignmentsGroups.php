<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildFullResource;
use Crewsense\apisdk\v1\entities\AssignmentGroup;

/**
 * Description of AssignmentsGroups
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class AssignmentsGroups extends BaseChildFullResource
{
    public static function getParentClass()
    {
        return Assignments::className();
    }

    public static function getEntityClass()
    {
        return AssignmentGroup::className();
    }

}
