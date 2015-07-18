<?php


define('AREA', 'A');
define('ACCOUNT_TYPE', 'vendor');

try
{
    require(dirname(__FILE__) . '/init.php');
    fn_dispatch();
} catch (Tygh\Exceptions\AException $e)
{
    $e->output();
}
