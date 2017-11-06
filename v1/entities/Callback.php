<?php

namespace Crewsense\apisdk\v1\entities;

use Crewsense\apisdk\common\BaseEntity;

/**
 * Description of Callback
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Callback extends BaseEntity {
    
    public $position;
    
    public $status;
    
    public $contact_method;
    
    public $contact_time;
    
    public $response_time;
    
    public $start_time;
    
    public $end_time;
    
    public $uses_opportunity;
    
    public $do_not_disturb;
    
    public $auto_accepted;
    
}
