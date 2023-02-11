<?php

class testobject
{
}

function intTest ($value): INT
{
    return $value;
}
function floatTest ($value): FLOAT
{
    return $value;
}
function stringTest ($value): STRING
{
    return $value;
}
function boolTest ($value): BOOL
{
    return $value;
}
function arrayTest ($value): ARRAY
{
    return $value;
}
function objectTest ($value): OBJECT
{
    return $value;
}
function nullTest ($value): NULL
{
    return $value;
}
$testTypes = [2, 3.5, "hello", true, array(3, 2, 1), new testobject(), null];


foreach($testTypes as $index=>$type)
{

            print_r(boolTest($type));

        echo ("\n");
}

?>
