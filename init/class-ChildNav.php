<?php

class ChildNav extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()){
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"drop-down\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array()){
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}