<?php

namespace Crewsense\apisdk\common;

use Crewsense\apisdk\common\ResourceGetTrait;
use Crewsense\apisdk\common\ResourcePostTrait;
use Crewsense\apisdk\common\ResourcePatchTrait;
use Crewsense\apisdk\common\ResourceDeleteTrait;
use Crewsense\apisdk\common\ResourceSendTrait;

/**
 * Description of BaseChildFullResource
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class BaseChildFullResource {
    
    use ResourceGetTrait;
    use ResourcePostTrait;
    use ResourcePatchTrait;
    use ResourceDeleteTrait;
    use ResourceSendTrait;
    
}
