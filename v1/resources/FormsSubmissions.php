<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseChildResource;
use Crewsense\apisdk\v1\entities\FormSubmission;
use Crewsense\apisdk\common\ResourceGetTrait;

/**
 * Description of FormsSubmissions
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class FormsSubmissions extends BaseChildResource {
    
    use ResourceGetTrait {
        get as traitGet;
    }
    
    public function get()
    {
        return $this->traitGet();
    }
    
    public static function getParentClass()
    {
        return Forms::className();
    }

    public static function getEntityClass()
    {
        return FormSubmission::className();
    }
    
}
