<?php
    if (!defined('BASEPATH'))
        exit('No direct script access allowed');
    /*
      | -------------------------------------------------------------------------
      | Hooks
      | -------------------------------------------------------------------------
      | This file lets you define "hooks" to extend CI without hacking the core
      | files.  Please see the user guide for info:
      |
      |	http://codeigniter.com/user_guide/general/hooks.html
      |
     */



    /* End of file hooks.php */
    /* Location: ./application/config/hooks.php */

    //  To check if the user preferred currency exists in cookie
    $hook['post_controller_constructor'] = array(
        'class' => 'CurrencyHook',
        'function' => 'checkIfCurrencyCookieExists',
        'filename' => 'CurrencyHook.php',
        'filepath' => 'hooks',
    );

    //  To set price conversion cookie
    $hook['post_controller_constructor'] = array(
        'class' => 'CurrencyHook',
        'function' => 'checkIfPriceConversionExists',
        'filename' => 'CurrencyHook.php',
        'filepath' => 'hooks',
    );
    
    $hook['post_controller_constructor'] = array(
        'class' => 'InitialcheckHook',
        'function' => 'checkLoggedIn',
        'filename' => 'InitialcheckHook.php',
        'filepath' => 'hooks',
    );
    
    // to check if the user is logged in and has products in the cart, to be added into the database
//    $hook['post_system'] = array(
    $hook['post_controller_constructor'] = array(
        'class' => 'CartHook',
        'function' => 'addProductsFromCartToDB',
        'filename' => 'CartHook.php',
        'filepath' => 'hooks',
    );
    
    // to fill up blank product metas
    $hook['post_system'] = array(
        'class' => 'InitialcheckHook',
        'function' => 'checkIfProductMetaNotEmpty',
        'filename' => 'InitialcheckHook.php',
        'filepath' => 'hooks',
    );
    
    // to set the timezone of the website
    $hook['post_controller_constructor'] = array(
        'class' => 'InitialcheckHook',
        'function' => 'setTimezone',
        'filename' => 'InitialcheckHook.php',
        'filepath' => 'hooks',
    );