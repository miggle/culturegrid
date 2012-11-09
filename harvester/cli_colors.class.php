<?php
 
function ccli($string, $foreground_color = null, $background_color = null) {
  
  $f_colors = array();
  $b_colors = array();
 	
  // Set up shell colors
  $f_colors['black'] = '0;30';
  $f_colors['dark_gray'] = '1;30';
  $f_colors['blue'] = '0;34';
  $f_colors['light_blue'] = '1;34';
  $f_colors['green'] = '0;32';
  $f_colors['light_green'] = '1;32';
  $f_colors['cyan'] = '0;36';
  $f_colors['light_cyan'] = '1;36';
  $f_colors['red'] = '0;31';
  $f_colors['light_red'] = '1;31';
  $f_colors['purple'] = '0;38';
  $f_colors['light_purple'] = '1;35';
  $f_colors['brown'] = '0;33';
  $f_colors['yellow'] = '1;33';
  $f_colors['light_gray'] = '0;37';
  $f_colors['white'] = '1;37';

  $b_colors['black'] = '40';
  $b_colors['red'] = '41';
  $b_colors['green'] = '42';
  $b_colors['yellow'] = '43';
  $b_colors['blue'] = '44';
  $b_colors['magenta'] = '45';
  $b_colors['pink'] = '45';
  $b_colors['cyan'] = '46';
  $b_colors['light_gray'] = '47';
  
  return get_colored_string($string, $foreground_color, $background_color,$f_colors,$b_colors);
    
}
 
// Returns colored string
function get_colored_string($string, $foreground_color = null, $background_color = null,$f_colors,$b_colors) {
        $colored_string = "";

        // Check if given foreground color found
        if (isset($f_colors[$foreground_color])) {
                $colored_string .= "\033[" . $f_colors[$foreground_color] . "m";
        }
        // Check if given background color found
        if (isset($b_colors[$background_color])) {
                $colored_string .= "\033[" . $b_colors[$background_color] . "m";
        }

        // Add string and end coloring
        $colored_string .=  $string . "\033[0m";

        return $colored_string;
}
	
 
?>