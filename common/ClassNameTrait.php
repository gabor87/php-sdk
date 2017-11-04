<?php

namespace Crewsense\apisdk\common;

/**
 * Description of ClassNameTrait
 *
 * @author Varga Gábor <gabor87@outlook.com>
 */
trait ClassNameTrait
{
    /**
     * 
     * @return string
     */
    public static function className()
    {
        return get_called_class();
    }
    
    /**
     * 
     * @return string
     */
    public static function classShortName()
    {
        return (new \ReflectionClass(get_called_class()))->getShortName();
    }
}
