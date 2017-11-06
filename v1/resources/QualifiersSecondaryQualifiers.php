<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildResource;
use Crewsense\apisdk\v1\entities\QualifierSecondaryQualifier;
use Crewsense\apisdk\common\ResourceGetTrait;
use Crewsense\apisdk\common\ResourcePostTrait;
use Crewsense\apisdk\common\ResourceDeleteTrait;

/**
 * Description of QualifiersSecondaryQualifiers
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class QualifiersSecondaryQualifiers extends BaseChildResource {
    
    use ResourceGetTrait {
        get as traitGet;
    }
    use ResourcePostTrait;
    use ResourceDeleteTrait;
    
    public function get()
    {
        return $this->traitGet();
    }
    
    public static function getParentClass()
    {
        return Qualifiers::className();
    }

    public static function getEntityClass()
    {
        return QualifierSecondaryQualifier::className();
    }
    
}
