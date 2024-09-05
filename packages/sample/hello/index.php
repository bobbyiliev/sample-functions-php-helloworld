<?php
 
function main(array $args) : array
{
    $name = $args["name"] ?? "stranger";
    
    $greeting = "Hello {$name}!";
    echo $greeting;

    error_log("This is a runtime error log message");
 
    return [
        'body' => $greeting,
    ];
}
