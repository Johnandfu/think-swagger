<?php
/**
 * @link https://www.xinrennet.com/
 *
 * @copyright Copyright (c) 2018 XINRENNET
 */

think\facede\Route::any('swagger', '\\westhack\\swagger\\IndexController@index');
think\facede\Route::any('swagger/api', '\\westhack\\swagger\\ApiController@api');

