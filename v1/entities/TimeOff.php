<?php

namespace Crewsense\apisdk\v1\entities;

use Crewsense\apisdk\common\BaseEntity;

/**
 * Description of TimeOff
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class TimeOff extends BaseEntity {
    
    public $user_id;
    
    public $admin_ids;
    
    public $start_date;
    
    public $end_date;
    
    public $time_off_type_id;
            
    public $user_note;
    
}
