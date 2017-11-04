<?php

namespace Crewsense\apisdk\v1\entities;

use Crewsense\apisdk\common\BaseEntity;

/**
 * Description of Assignment
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
class Assignment extends BaseEntity
{
    public $name;
    
    public $positions_to_fill;
    
    public $start;
    
    public $end;
    
    public $position;
    
    public $no_time;
    
    public $is_work_shift;
    
    public $self_scheduling;
    
    public $self_scheduling_approval;
    
    public $crewsense_eligible;
    
    public $hide_open_slots;
    
    public $color;
    
    public $self_scheduling_requires_approval;
    
    
}
