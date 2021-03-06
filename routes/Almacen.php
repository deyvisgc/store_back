<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an Application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//Producto
$router->post('api/v1/Almacen/Producto','Almacen\Producto\ProductoController@Store');
$router->patch('api/v1/Almacen/Producto','Almacen\Producto\ProductoController@Update');
$router->get('api/v1/Almacen/Producto','Almacen\Producto\ProductoController@Read');
$router->get('api/v1/Almacen/Producto/{id}','Almacen\Producto\ProductoController@Readxid');
$router->delete('api/v1/Almacen/Producto/{id}','Almacen\Producto\ProductoController@delete');
$router->patch('api/v1/Almacen/Producto/changestatus','Almacen\Producto\ProductoController@changestatus');
$router->get('api/v1/Almacen/LastIdProducto','Almacen\Producto\ProductoController@LastIdProducto');


//SEARCHTRAITS
$router->post('api/v1/Almacen/Producto/SearchxType','Almacen\Producto\ProductoController@SearchxType');


//Unidad Medida
$router->get('api/v1/Almacen/Unidad','Almacen\Unidad\UnidadMedidaController@Read');
$router->post('api/v1/Almacen/Unidad','Almacen\Unidad\UnidadMedidaController@store');
$router->patch('api/v1/Almacen/Unidad','Almacen\Unidad\UnidadMedidaController@update');
$router->delete('api/v1/Almacen/Unidad/{id}','Almacen\Unidad\UnidadMedidaController@delete');
$router->patch('api/v1/Almacen/Unidad/ChangestatusUnidad','Almacen\Unidad\UnidadMedidaController@ChangestatusUnidad');

//Clase
$router->get('api/v1/Almacen/Clase','Almacen\Clase\ClaseController@Read');
$router->post('api/v1/Almacen/Clase','Almacen\Clase\ClaseController@store');
$router->get('api/v1/Almacen/Clase/superior','Almacen\Clase\ClaseController@getclasesuperior');
$router->get('api/v1/Almacen/Clase/recursiveChildren','Almacen\Clase\ClaseController@recursiveChildren');
$router->get('api/v1/Almacen/Clase/ObtenerclasPadreYhijo/{idpadre}','Almacen\Clase\ClaseController@Obtenerclasexid');
$router->patch('api/v1/Almacen/Clase/ActualizarclasPadreYhijo','Almacen\Clase\ClaseController@update');
$router->get('api/v1/Almacen/Clase/viewchild/{idpadre}','Almacen\Clase\ClaseController@viewchild');
$router->patch('api/v1/Almacen/Clase/Actualizarcate','Almacen\Clase\ClaseController@Actualizarcate');
$router->patch('api/v1/Almacen/Clase/Changestatuscate','Almacen\Clase\ClaseController@Changestatuscate');
$router->patch('api/v1/Almacen/Clase/ChangestatusCateRecursiva','Almacen\Clase\ClaseController@ChangestatusCateRecursiva');
$router->get('api/v1/Almacen/Clase/filtrarxclasepadre/{idpadre}','Almacen\Clase\ClaseController@filtrarxclasepadre');



