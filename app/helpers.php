<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/23/16
 * Time: 8:52 PM
 */

function option($key){

    $option = \App\Option::whereKey($key)->first();

    if(!$option) {
        return "";
    }

    return $option->val;
}