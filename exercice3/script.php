<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ok = true;
    
    if(empty($_POST['make']))
    {
        // display error
        echo 'make field can\'t be empty';
        
        $ok = false;
    }

    if(empty($_POST['model']))
    {
        // display error
        echo 'model field can\'t be empty';
        
        $ok = false;
    }

    if(empty($_POST['year']))
    {
        // display error
        echo 'year field can\'t be empty';
        
        $ok = false;
    }
     
    if(empty($_POST['color']) || !in_array($_POST['color'], ['black', 'white', 'blue', 'red']))
    {
        // display error
        echo 'please select a color';
        
        $ok = false;
    }
    
    if($ok)
    {
        echo 'everything is ok';
    }
    else
    {
        http_response_code(400);
        echo ', you have a problem, check your form again';
    }
    
}
else
{
    // display error
    http_response_code(405);
    echo 'nok';
}