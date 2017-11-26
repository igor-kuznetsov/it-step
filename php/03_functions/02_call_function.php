<?php

name_of_my_function(); // 'name_of_my_function'
Name_Of_My_FuNcTiOn(); // 'name_of_my_function'

function name_of_my_function()
{
    echo __FUNCTION__;
}