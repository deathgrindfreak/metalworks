<?php

// Adds arbitrary stylesheets to the header file from array $stylesheets
function add_stylesheets($stylesheets = "") {

    if ($stylesheets == "") {
        return;
    } else {
        
        $sheet = 0; 

        while ($sheet < sizeof($stylesheets)) {

            echo "    " . '<link type="text/css" rel="stylesheet" href="css/' . $stylesheets[$sheet] . '"/>' . "\n";
            $sheet += 1;
        }

    }
}

// Adds arbitrary scripts to the header file from array $stylesheets
function add_scripts($scripts = "") {

    if ($scripts == "") {
        return;
    } else {
        
        $script = 0; 

        while ($script < sizeof($scripts)) {

            echo "    " . '<script type="text/javascript" src="js/' . $scripts[$script] . '"/></script>' . "\n";
            $script += 1;
        }

    }
}
