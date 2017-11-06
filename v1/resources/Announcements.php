<?php

namespace Crewsense\apisdk\v1\resources;

use Crewsense\apisdk\common\BaseFullResource;
use Crewsense\apisdk\v1\entities\Announcement;

/**
 * Description of Announcements
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Announcements extends BaseFullResource {
    
    public static function getEntityClass()
    {
        return Announcement::className();
    }
    
}
