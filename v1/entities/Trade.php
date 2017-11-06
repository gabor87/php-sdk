<?php

namespace Crewsense\apisdk\v1\entities;

use Crewsense\apisdk\common\BaseEntity;

/**
 * Description of Trade
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Trade extends BaseEntity {
    
    public $start;
    
    public $end;
    
    public $requesting_user_id;
    
    public $approving_user_id;
    
    public $status;
    
    public $note;
    
}
