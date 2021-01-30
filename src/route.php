<?php
/**
 * @link https://www.xinrennet.com/
 *
 * @copyright Copyright (c) 2018 XINRENNET
 */
use think\facade\Route;
Route::any('swagger', '\\westhack\\swagger\\IndexController@index');
Route::any('swagger/api', '\\westhack\\swagger\\ApiController@api');

