<?php

/*
** What up foo?
** Simple ExpressionEngine plugin to convert a string to a formatted date
** using the native PHP date and strtotime methods
** 
** Author: Chad Hutchins, http://twitter.com/chadhutchins
** License: The "i don't care what you do with this" license
** Support: There's no support for this code. It's provided as is. Fork it if you need something. I'm from Texas ya'll.
** Website: https://github.com/chadhutchins/date_format
*/

class date_format
{
    function date_format($direct='')
    {
        $this->EE =& get_instance();
        
        $date = $this->EE->TMPL->fetch_param('date', null);
        $format = $this->EE->TMPL->fetch_param('format', null);
        
        if ($date == null || empty($date))
        {
            return $this->return_data = "A date to format is required.";
        }
    
        if ($format == null || empty($format))
        {
            return $this->return_data = "A format string is required.";
        }
            
        return $this->return_data = date($format,strtotime($date));
    }
}
