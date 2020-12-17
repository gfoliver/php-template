<?php 

function view($file, $data = array())
{
    $output = NULL;
    if(file_exists($file))
    {
        // Extract the variables to a local namespace
        extract($data);

        // Start output buffering
        ob_start();

        // Include the template file
        include $file;

        // End buffering and return its contents
        $output = ob_get_clean();
    }

    return $output;
}
