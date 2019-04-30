<?php


$app->get('/contact', "ContactController:all");
$app->get('/contact/{id}', "ContactController:find");

$app->get('/usuario/{email}/{contrasena}', "LoginController:find");


$app->get('/tipodealerta', "AlertasController:all");
$app->get('/tipodealerta/{id}', "AlertasController:find");
$app->get('/crear_tipodealerta/{Descripcion}', "AlertasController:agregar");
$app->get('/eliminar_tipodealerta/{id}', "AlertasController:eliminar");
$app->get('/editar_tipodealerta/{Id}/{Descripcion}', "AlertasController:actualizar");

$app->get('/cirugia_usuario', "CirugiaUsuarioController:all");
$app->get('/cirugia_usuario/{id}', "CirugiaUsuarioController:find");
$app->get('/agregar_cirugia_usuario/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:add");
$app->get('/eliminar_cirugia_usuario/{id}', "CirugiaUsuarioController:delete");
$app->get('/editar_cirugia_usuario/{id}/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:edit");



$app->get('/eps', "EPSController:all");


$app->get('/eps/{id}', "EPSController:find");
$app->get('/crear_eps/{Nombre}', "EPSController:add");

$app->get('/eliminar_eps/{id}', "EPSController:delete");

$app->get('/editar_eps/{id}/{Nombre}', "EPSController:update");




$app->get('/contacto', "ContactController:all");
$app->get('/contacto/{id}', "ContactController:find");
$app->get('/eliminar_contacto/{id}', "ContactController:delete");
$app->get('/crear_contacto/{Nombre}/{IdParentesco}/{Celular}/
	{IdTipoContacto}/{Prioridad}', "ContactController:add");

$app->get('/actualizar_contacto/{id}/{Nombre}/{IdParentesco}/{Celular}/
	{IdTipoContacto}/{Prioridad}', "ContactController:update");


$app->get('/usuario', "UsuarioController:all");
$app->get('/medicamento', "MedicamentoController:all");
$app->get('/usuario/{id}', "UsuarioController:find");
$app->get('/eliminar_usuario/{id}', "UsuarioController:delete");
$app->get('/editar_usuario/{id}/{IdRh}/{IdEps}/{IdTipoDeDocumento}/{NroDeDocumento}/{Nombre}/{Apellido}/{TelefonoFijo}/{Celular}/{Email}/{Direccion}/{Contrasena}/{FechaDeNacimiento}', "UsuarioController:update");

$app->get('/usuario',"LoginController:login");
