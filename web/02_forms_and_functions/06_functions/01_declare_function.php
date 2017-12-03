<?php

function name_of_my_function()
{
    echo __FUNCTION__; // константа содержит имя функции
}

function nAme_of_mY_functioN()
{
    // имена функций регистронезависимы
    // попытка переопределить функцию вызовет ошибку!
}